@section('footer')   
    <div class="modal" id="form_{{$form_id}}">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                @if(isset($form_id))
                    <?php $form = \App\Form::where(['id' => $form_id, 'active' => 1])->first();?>
                    @if($form)
                        @if($form->form_fields)
                        <div class="modal-header">
                            <h4 class="modal-title">{{$form->title}}</h4>
                            <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
                        <div class="modal-body">   
                            <form class="custom-form block-form mt-3 mt-md-0" action="{{route('send_form', [])}}" method="post" enctype="multipart/form-data" class="custom-form custom-form-{{$form->id}} {{$form->css_class}}">
                                {{ csrf_field() }}
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
                                        <div class="col-md-12 text-right recaptcha-block">
                                            <div id="recaptcha_{{$form->id}}" class="g-recaptcha" data-sitekey="6LdOeX8cAAAAAOMivfDsfZPkPsWInbDMn8Q8rBqm"></div>
                                            <div style="clear: both"></div>
                                        </div>
                                        @endif
                                        <div class="modal-footer w-100">
                                            <input type="submit" class="btn btn-primary" value="{{empty($form->button_text) ? "Send" : $form->button_text}}"/>
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
                        </div>
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
            </div>
        </div>
    </div>
    @parent
@stop