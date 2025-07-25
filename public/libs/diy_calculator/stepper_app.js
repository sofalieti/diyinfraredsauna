$(document).ready(function(){
    var stepper = document.querySelector('.stepper');
    if(stepper != null){
        var stepperInstace = new MStepper(stepper, {
            firstActive: 0,
            validationFunction: function (stepperForm, activeStepContent) {
                var step_index = $(activeStepContent).closest('li.step').index();
                var errors = [];
                $(activeStepContent).find('.alert').remove();
                if(step_index == 0){
                    if($(activeStepContent).find('input[name=pc_width]').val() == "" || $(activeStepContent).find('input[name=pc_depth]').val() == "" || $(activeStepContent).find('input[name=pc_height]').val() == ""){
                    //if($(activeStepContent).find('.layouts img.selected').length == 0){
                        //$(activeStepContent).prepend('<div class="alert alert-danger">Please, select sauna layout!</div>');
                        errors.push(false);
                    }
                    $.each($(activeStepContent).find('.validate'), function(key, element){
                        let validate = $('.f-validate').validate().element(element);   
                        if(!validate) errors.push(validate);
                    });
                }else if(step_index == 1){
                    if(!$(activeStepContent).find('input[type=checkbox]:checked').length){
                        //$(activeStepContent).prepend('<div class="alert alert-danger">Please, select control panel!</div>');
                        errors.push(false);
                    }
                }
                
                /*if($(activeStepContent).find('.alert').length){
                    $([document.documentElement, document.body]).animate({
                        scrollTop: ($(activeStepContent).find('.alert').offset().top-100)
                    }, 500);
                }*/

                return !errors.length;
            }
        });
        
        $(document).on('click', '.last-step .step-result-number', function () {
            let step = $(this).attr('data-step');
            stepperInstace.openStep(step-1);
            return false;
        });
        
        stepper.addEventListener('stepopen', function(){
            $([document.documentElement, document.body]).animate({
                scrollTop: ($('.step.active').offset().top-100)
            }, 500);
        }, true);
    }
});