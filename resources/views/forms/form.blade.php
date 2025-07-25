@if(isset($form_id))
    <?php $form = \App\Form::where(['id' => $form_id, 'active' => 1])->first();?>
    @if($form)
        @if($form->form_fields)
        <form class="custom-form custom-form-{{$form->id}} {{$form->css_class}} block-form mt-3 mt-md-0" action="{{route('send_form', [])}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class='form-title text-center text-md-left'>{{$form->title}}</div>
            <div class="custom-form-error"></div>
            <div class="custom-form-success"></div>
            @if(!empty($form->header_text))
            <div class='form-header-text text-center text-md-left'>{{$form->header_text}}</div>
            @endif
            <div class='form-block'>
                <div class='row'>
                    @foreach($form->form_fields as $field)
                    <div class='{{!empty($field->css_class) ? $field->css_class : 'col-md-12'}}'>
                        <div class='form-group'>
                            @include("forms.fields.{$field->type}", ['field' => $field])
                        </div>
                    </div>
                    @endforeach
                    @if($form->use_captcha)
                    <div class="col text-right recaptcha-block">
                        <div id="recaptcha_{{$form->id}}" class="g-recaptcha" data-sitekey="6LdOeX8cAAAAAOMivfDsfZPkPsWInbDMn8Q8rBqm"></div>
                        <div style="clear: both"></div>
                    </div>
                    @endif
                    <div class="col-auto text-center text-md-right">
                        <input type="submit" class="btn btn-primary h58px" value="{{empty($form->button_text) ? "Send" : $form->button_text}}"/>
                    </div>
                </div>
            </div>
            @if(!empty($form->footer_text))
            <div class='form-footer-text'>{{$form->footer_text}}</div> 
            @endif
        </form>
        @else
        <div class="alert alert-danger" role="alert">
            Form fields not found
        </div>
        @endif
    @else
    <div class="alert alert-danger" role="alert">
        Form not found
    </div>
    @endif
@else
<div class="alert alert-danger" role="alert">
    Form not found
</div>
@endif