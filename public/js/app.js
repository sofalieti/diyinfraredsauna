$(document).ready(function () {
    $('.phone-mask input[type=text]').focus(function(){
        $(this).mask("+1-999-999-9999", {placeholder: "+1-___-___-____"}).val('+1-');
    });
    $('.layout-shape img').click(function(){
        let shape_id = $(this).attr('data-shape');
        $('.layout-shape img').removeClass('active');
        $('.stepper .layouts').removeClass('active');
        $(this).addClass('active');
        $('#' + shape_id).addClass('active');
         $([document.documentElement, document.body]).animate({
            scrollTop: $('.step-content').offset().top
        }, 600);
    });
    $('#layouts .thumbs img').click(function(){
        let src = $(this).attr('src').replace('thumb', 'large');
        $('#layouts .main img').attr('src', src);
    });
    
    $('.dropdown-open').click(function(){
        if($(this).next('.dropdown-menu').css('display') == 'none'){
            $(this).next('.dropdown-menu').css('display', 'block');
            $(this).find('i').removeClass('fa-chevron-right').addClass('fa-chevron-down');
        }else{
            $(this).next('.dropdown-menu').css('display', 'none');
            $(this).find('i').removeClass('fa-chevron-down').addClass('fa-chevron-right');
        }
    });
    $('.custom-form').ajaxForm({ 
        beforeSubmit: function(formData, form, options){
            $(form).find('input[type=submit]').attr('disabled', true);
            $(form).find('.error-item').remove();
            $(form).find('.error-field').removeClass('error-field');
            $(form).find('.custom-form-error').html('');
            $(form).find('.custom-form-success').html('');
        },
        success: function(response, status, xhr, form){
            $(form).find('input[type=submit]').attr('disabled', false);
            if(response.errors != undefined){
                $.each(response.errors, function(field_id, error){
                    if(field_id == 'recapthca_error'){
                        $(form).find('.recaptcha-block').append('<span class="error-item">' + error + '</span>');
                    }else{
                        $('#field_' + field_id).before('<span class="error-item">' + error + '</span>');
                        $('#field_' + field_id).addClass('error-field');
                    }
                });
                if(!$(form).closest('.modal').length){
                    $([document.documentElement, document.body]).animate({
                        scrollTop: $(form).offset().top
                    }, 300);
                }
            }else if(response.error != undefined){
                $(form).find('.custom-form-error').html('<div class="alert alert-danger" role="alert">' + response.error + '</div>');
                if(!$(form).closest('.modal').length){
                    $([document.documentElement, document.body]).animate({
                        scrollTop: $(form).offset().top
                    }, 300);
                }
            }else{
                $(form).find('.custom-form-error').html('<div class="alert alert-success" role="alert">' + response.msg + '</div>');
                $(form).resetForm();
                if(!$(form).closest('.modal').length){
                    $([document.documentElement, document.body]).animate({
                        scrollTop: $(form).offset().top
                    }, 300);
                }
            }
            if($('.g-recaptcha').length){
                $.each(recaptcha, function(key, obj){
                    grecaptcha.reset(obj);
                });
            }
        }
    }); 
    
    $.validator.setDefaults({
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
    
    $.validator.addMethod(
            "regex",
            function (value, element, regstring) {
                value = value.replace(/\s/g, '').replace(',', '.');
                if (this.optional(element)) {
                    return true;
                }

                var regParts = regstring.match(/^\/(.*?)\/([gim]*)$/);
                if (regParts) {
                    // the parsed pattern had delimiters and modifiers. handle them. 
                    var regexp = new RegExp(regParts[1], regParts[2]);
                } else {
                    // we got pattern string without delimiters
                    var regexp = new RegExp(regstring);
                }

                return regexp.test(value);
            },
            "Wrong format"
            );

    $(document).on('click', '.projects-block .projects-preview .item a', function(){
        let id = $(this).attr('data-id');
        let obj = this;
        $.ajax({
            url: "/ajax/project/" + id,
            success: function(html){
                $('.projects-block .project').html(html);
                $('.projects-block .projects-preview .item a').removeClass('active');
                $(obj).addClass('active');
            }
        });
        
        return false;
    });
    
    if($('.reviews-block .item-block').length){
        $.each($('.reviews-block .item-block'), function(key, obj){
            let review_height = $(obj).find('.text').height();
            let review_inner_height = $(obj).find('.inner').height();
            
            if(review_inner_height > review_height){
                $(this).find('.item').addClass('big');
            }
        })
    }
    
    $('.reviews-block .item.big .review .text .more').click(function(){
        if($(this).closest('.item').hasClass('open')){
            $(this).closest('.item').removeClass('open');
            $(this).find('i').removeClass('fa-chevron-up').addClass('fa-chevron-down');
        }else{
            $(this).closest('.item').addClass('open');
            $(this).find('i').addClass('fa-chevron-up').removeClass('fa-chevron-down');
        }
    });
    
    new WOW().init({
        mobile: false
    });

    $('.projects-preview').owlCarousel({
        loop: true,
        margin: 17,
        items: 5,
        responsive: {
            0: {
                items: 2,
                nav: false
            },
            500: {
                items: 3,
                nav: false
            },
            768: {
                items: 4,
                nav: false
            },
            992: {
                items: 5,
                nav: false
            }
        }
    })
});