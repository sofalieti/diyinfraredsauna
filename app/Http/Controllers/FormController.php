<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Form;
use App\FormField;
use Validator;

class FormController extends Controller
{
    public function send_form(Request $request){
        $data = $request->except(['_token']);
        $response = [];
        
        if($this->check_black_list($request->get('form')) && count($data)){
            $form_id = key($data['form']);
            $form = Form::where(['id' => $form_id, 'active' => 1])->first();
            if($form){
                $rules = [];
                $values = [];
                $rule_field_names = [];
                $single_images = [];
                $zoho_fields = [];
                $curl_attachments = [];
                foreach($form->form_fields as $field){
                    if($field->type != 'custom_text'){
                        //Если передали каким то оброзом не все поля которые есть в форме например мультиселек или чекбокс или радио
                        if(!isset($data['form'][$form_id][$field->id])){
                            $data['form'][$form_id][$field->id] = '';
                        }
                        $value = $data['form'][$form_id][$field->id];
                        if(is_array($value)){//Для значений которые массив - мульти селекс
                            $value = join(", ", $value);
                        }
                        
                        if($field->required && $field->type == 'email'){
                            $rules["form.{$form_id}.{$field->id}"] = 'required|email';
                        }elseif($field->required){
                            $rules["form.{$form_id}.{$field->id}"] = 'required';
                        }elseif($field->type == 'email'){
                            $rules["form.{$form_id}.{$field->id}"] = 'email';
                        }
                        
                        //Для картинки
                        if($field->type == 'image'){
                            if(isset($rules["form.{$form_id}.{$field->id}"])){
                                $rules["form.{$form_id}.{$field->id}"] .= '|mimes:jpeg,bmp,png,svg,gif,webp,jpg';
                            }else{
                                $rules["form.{$form_id}.{$field->id}"] = 'mimes:jpeg,bmp,png,svg,gif,webp,jpg';
                            }
                            
                            if(isset($data['form'][$form_id][$field->id]) && is_object($data['form'][$form_id][$field->id])){
                                $image_name = uniqid(rand(), true).'.'.$data['form'][$form_id][$field->id]->getClientOriginalExtension();
                                $single_images[]= [
                                    'name' => $image_name,
                                    'image' => $data['form'][$form_id][$field->id],
                                    'src_path' => "/storage/forms/{$form_id}/$image_name"
                                ];
                                $value = "/storage/forms/{$form_id}/$image_name";
                            }
                        }
                        $values[$field->id] = [
                            'name' => $field->name,
                            'value' => $value,
                            'type' => $field->type
                        ];
                        $rule_field_names["form.{$form_id}.{$field->id}"] = [
                            'name' => $field->name,
                            'field_id' => $field->id
                        ];
                        
                        if (!empty($field->zoho_field_type)) {
                            $zoho_fields[$field->zoho_field_type] = $value;
                        }elseif($field->type != 'image'){
                            if(!isset($zoho_fields['description'])) $zoho_fields['description'] = "";
                            $zoho_fields['description'] .= $field->name.": ".$value."\n";
                        }
                    }
                }
                $validator = Validator::make($data, $rules);
                
                if($form->use_captcha){
                    $validator->after(function ($validator) use ($request) {
                        if(!$this->recaptcha_check($request->get('g-recaptcha-response'))){
                            $validator->getMessageBag()->add('recapthca_error', 'You have not passed the antibot test!');
                        }
                    });
                }
                
                if(!$validator->fails()){
                    //Загрузка картинок
                    foreach($single_images as $key => $image){
                        $image['image']->move(public_path("storage/forms/{$form_id}"), $image['name']);
                        if($key < 5){
                            $curl_attachments["attachment_".($key+1)] = curl_file_create(public_path("storage/forms/{$form_id}/{$image['name']}"), mime_content_type(public_path("storage/forms/{$form_id}/{$image['name']}")), $image['name']);
                        }                            
                    }
                    //Сохранение данных
                    $form_result = $form->form_results()->create([
                        'form_name' => $form->name,
                        'data' => json_encode($values),
                        'link' => $request->server('HTTP_REFERER')
                    ]);
                    $response['msg'] = $form->success_text;
                    
                    $msg = '';
                    $protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === 0 ? 'https://' : 'http://';
                    foreach($values as $value){
                        if(!empty($value['value'])){
                            if($value['type'] != 'image')
                                $msg .= "{$value['name']}: {$value['value']}<br/>";
                        }
                    }
                    
                    if (count($zoho_fields) >= 3) {
                        
                        $zoho_fields['description'] = str_replace(' ', '', @$zoho_fields['description']); 
                        $zoho_fields['description'] = str_ireplace(["<br />", "<br>", "<br/>"], "\r\n", $zoho_fields['description']);  
                        $zoho_fields['description'] = strip_tags($zoho_fields['description']);
                        $zoho_fields['description'] = str_replace("Calcdata:", "", $zoho_fields['description']);
                        
                        $zoho_data = [
                            "zf_referrer_name" => "",
                            "zf_redirect_url" => "",
                            "zc_gad" => "",
                            "SingleLine3" => $form->name,//"Contact us for a price",
                            "SingleLine" => $zoho_fields['name'],
                            "SingleLine1" => $zoho_fields['email'],
                            "SingleLine2" => $zoho_fields['phone'],
                            "MultiLine" => @$zoho_fields['description'],
                        ];
                        
                        if(count($curl_attachments)){
                            $index = 0;
                            foreach($curl_attachments as $curl_attachment){
                                $zoho_data['ImageUpload'.($index > 0 ? $index : "")] = $curl_attachment;
                                $index++;
                            }
                        }
                        
                        $ch = curl_init();
                        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        curl_setopt($ch, CURLOPT_POST, true);
                        curl_setopt($ch, CURLOPT_POSTFIELDS, $zoho_data);
                        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Accept: application/json', 'Content-Type:multipart/form-data']);
                        curl_setopt($ch, CURLOPT_URL, "https://forms.zohopublic.com/zohopeople267/form/DiyForms/formperma/4eAo5F2px9T7AzTZYfWt6oJ-sh0ocHMry9nv-5BnI-s/htmlRecords/submit");
                        curl_setopt($ch, CURLOPT_HEADER, TRUE);
                        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                        $zoho_response = curl_exec($ch);
                        $zoho_response_info = curl_getinfo($ch);
                        curl_close($ch);
                    }
                    
                }else{
                    $response['errors'] = [];
                    foreach($validator->errors()->getMessages() as $key => $message){
                        if($key == 'recapthca_error'){
                            $response['errors'][$key] = join("<br/>", $message);
                        }else{
                            $message = join("<br/>", $message);
                            $message = str_replace($key, $rule_field_names[$key]['name'], $message);
                            $response['errors'][$rule_field_names[$key]['field_id']] = $message;
                        }
                    }
                }
            }else{
                $response['error'] = 'Form not found';
            }
        }else{
            $response['error'] = 'Request error';
        }
        
        return response()->json($response);
    }
    
    private function recaptcha_check($captcha){
        $privatekey = "6LdOeX8cAAAAAO90X-nasV5cyznnRFaLadSE3aKc"; 
	$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$privatekey."&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);	
	$responseKeys = json_decode($response,true);	
	return json_encode($responseKeys['success']) === 'true';
    }
    
    private function get_host($url) { 
        $parseUrl = parse_url(trim($url)); 
        return trim($parseUrl['host'] ? $parseUrl['host'] : array_shift(explode('/', $parseUrl['path'], 2))); 
    } 
    
    private function check_black_list($form) {
        $black_list = array('freetexthost.com', 'canadian-pharmacyn', 'cialis', 'porn');
        foreach ($form as $fields) {
            foreach ($fields as $field) {
                foreach ($black_list as $w) {
                    if (preg_match("/$w/iu", $field)) {
                        return false;
                    }
                }
                /*if (preg_match('/<[^<]+>/ius', $field)) {
                    return false;
                }*/
                if (preg_match('/http|ftp|mailto/ius', $field)) {
                    return false;
                }
                if(preg_match("/[а-яё]/iu", $field)){
                    return false;
                }
            }
        }
        return true;
    }
}
