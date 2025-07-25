<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Seo;
use App\Review;
use Storage;
use App\Project;

class PageController extends Controller {

    public function home() {
        $page = Page::where(['is_home' => true, 'active' => true])->firstOrFail();
        
        $page->description = $this->replace_short_code($page->description);
        
        return view('pages.show', [
            'main_banner' => true,
            'page' => $page,
            'title' => $page['meta_title'],
            'keywords' => $page['meta_keywords'],
            'description' => $page['meta_description'],
        ]);
    }
    
    public function home_new() {
        $page = Page::where(['is_home' => true, 'active' => true])->firstOrFail();
        
        $page->description = $this->replace_short_code($page->description);
        
        return view('pages.show', [
            'main_banner' => true,
            'page' => $page,
            'title' => $page['meta_title'],
            'keywords' => $page['meta_keywords'],
            'description' => $page['meta_description'],
        ]);
    }    
    

    public function show_steps() {
      
        return view('blocks.stepbystep.allsteps');
    }
    
       public function show($slug) {
        $page = Page::leftJoin('seos', function($join) {
            $join->on('seos.seoable_id', '=', 'pages.id')->where('seos.seoable_type', 'App\Page');
        })->where('seos.slug', $slug)->firstOrFail();
        
        $page->description = $this->replace_short_code($page->description);

        return view('pages.show', [
            'page'=> $page,
            'title' => $page['meta_title'],
            'keywords' => $page['meta_keywords'],
            'description' => $page['meta_description'],
            'breadcrumbs' => [
                [
                    'name' => $page->name,
                    'last' => true,
                    'url' => false
                ]
            ]
        ]);
    }
    
    
    public function calculator(){
        
        return view('pages.calculator');
    }
    
    public function test(){
        
        return view('pages.test');
    }
    
    /*
     * Components
     */
    
    private function replace_short_code($text){
        
        preg_match_all('/(\[[a-z0-9_\-\s=]+\])/iu', $text, $short_codes);
        
        if(isset($short_codes[1]) && count($short_codes[1])){        
            foreach($short_codes[1] as $code){
                if(preg_match('/^(\[main_projects\])$/i', $code)){
                    $text = str_replace($code, $this->main_projects(), $text);
                }elseif(preg_match('/^(\[what_we_do\])$/i', $code)){
                    $text = str_replace($code, $this->what_we_do(), $text);
                }elseif(preg_match('/^(\[diy_sauna_parts\])$/i', $code)){
                    $text = str_replace($code, $this->diy_sauna_parts(), $text);
                }elseif(preg_match('/^\[form\s*id=(\d*)\]$/i', $code, $find_form_id)){
                    $text = str_replace($find_form_id[0], $this->render_form($find_form_id[1]), $text);
                }elseif(preg_match('/^\[template\s*name=([0-9a-z_\-]*)\]$/i', $code, $template)){
                    $text = str_replace($template[0], $this->render_template($template[1]), $text);
                }elseif(preg_match('/^(\[diy-calculator\])$/i', $code)){
                    $text = str_replace($code, $this->diy_calculator(), $text);
                }
            }
        }
        
        return $text;
    }
    
    private function what_we_do(){
        return view('blocks.html.what_we_do');
    }
    
    private function diy_sauna_parts(){
        return view('blocks.html.diy_sauna_parts');
    }
    
    private function main_projects($limit = 12){
        $projects = Project::orderBy('position')->orderBy('created_at', 'desc')->limit($limit)->get();
        
        return view('blocks.projects.main_projects', [
            'projects' => $projects
        ]);
    }
    
    private function diy_calculator(){
        return view('blocks.diy_calculator');
    }
    
    private function render_form($id){        
        return view('forms.form', [
            'form_id' => $id
        ]);
    }
    
    private function render_template($name){        
        return view("blocks.html.{$name}", [
            'name' => $name
        ]);
    }

}
