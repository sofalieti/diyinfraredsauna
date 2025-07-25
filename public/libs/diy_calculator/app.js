const lights_and_lamps_helper = 'There is additional power source (12V AC) for every four 12V Lamps';// ($99.99).
const stereo_system_helper = 'There is additional power source (12V DC) for stereo system';// ($99.99).
const lights_and_lamps_volt = '12V';
const lights_and_lamps_volt_price = '99.99';
const watts_and_volts = {
    600: {
        volts: '110V/120V|220V/240V',
        price: 950
    },
    1200: {
        volts: '110V/120V|220V/240V',
        price: 1300
    },
    1800: {
        volts: '110V/120V|220V/240V',
        price: 1650
    },
    2400: {
        volts: '110V/120V|220V/240V',
        price: 2000
    },
    3000: {
        volts: '110V/120V|220V/240V',
        price: 2350
    },
    3600: {
        volts: '110V/120V|220V/240V',
        price: 2700
    },
    4200: {
        volts: '110V/120V|220V/240V',
        price: 3050
    },
    4800: {
        volts: '110V/120V|220V/240V',
        price: 3350
    },
    5400: {
        volts: '110V/120V|220V/240V',
        price: 3650
    },
    6000: {
        volts: '110V/120V|220V/240V',
        price: 3950
    },
    6600: {
        volts: '110V/120V|220V/240V',
        price: 4250
    },
    7200: {
        volts: '110V/120V|220V/240V',
        price: 4550
    },
    7800: {
        volts: '110V/120V|220V/240V',
        price: 4850
    },
    8400: {
        volts: '110V/120V|220V/240V',
        price: 5150
    },
    9000: {
        volts: '110V/120V|220V/240V',
        price: 5450
    },
    9600: {
        volts: '110V/120V|220V/240V',
        price: 5750
    },
    10200: {
        volts: '110V/120V|220V/240V',
        price: 6050
    },
    10800: {
        volts: '110V/120V|220V/240V',
        price: 6350
    },
    11400: {
        volts: '110V/120V|220V/240V',
        price: 6650
    },
    12000: {
        volts: '110V/120V|220V/240V',
        price: 6950
    },
    12600: {
        volts: '110V/120V|220V/240V',
        price: 7250
    },
    13200: {
        volts: '110V/120V|220V/240V',
        price: 7550
    },
    13800: {
        volts: '110V/120V|220V/240V',
        price: 7850
    },
    14400: {
        volts: '110V/120V|220V/240V',
        price: 8150
    },
    15000: {
        volts: '110V/120V|220V/240V',
        price: 8450
    },
    15600: {
        volts: '110V/120V|220V/240V',
        price: 8750
    },
    16200: {
        volts: '110V/120V|220V/240V',
        price: 9050
    },
    16800: {
        volts: '110V/120V|220V/240V',
        price: 9350
    },
    17400: {
        volts: '110V/120V|220V/240V',
        price: 9650
    }

};

const volt_prices = {
    '120V': 0,
    '220V': 0
}

const heaters = {
    1: {
        name: 'CARBON <br> [Far Infrared]',
        k: 1,
        img: '/calc/images/StepHeater2.jpg',
        is_carbon: true,
        watt_prices: {
            600: {
                price: 950
            },
            1200: {
                price: 1300
            },
            1800: {
                price: 1700
            },
            2400: {
                price: 2050
            },
            3000: {
                price: 2450
            },
            3600: {
                price: 2850
            },
            4200: {
                price: 3250
            },
            4800: {
                price: 3600
            },
            5400: {
                price: 4000
            },
            6000: {
                price: 4350
            },
            6600: {
                price: 4750
            },
            7200: {
                price: 5150
            },
            7800: {
                price: 5500
            },
            8400: {
                price: 5900
            },
            9000: {
                price: 6300
            },
            9600: {
                price: 6700
            },
            10200: {
                price: 6700
            },
            10800: {
                price: 6700
            },
            11400: {
                price: 6700
            },
            12000: {
                price: 6700
            },
            12600: {
                price: 6700
            },
            13200: {
                price: 6700
            },
            13800: {
                price: 6700
            },
            14400: {
                price: 6700
            },
            15000: {
                price: 6700
            },
            15600: {
                price: 6700
            },
            16200: {
                price: 6700
            },
            16800: {
                price: 6700
            },
            17400: {
                price: 6700
            }
        }
    },
    2: {
        name: 'CERAMIC <br> [Far Infrared]',
        k: 1.1,
        img: '/calc/images/StepHeater3.jpg',
        is_carbon: true,
        watt_prices: {
            600: {
                price: 1200
            },
            1200: {
                price: 1550
            },
            1800: {
                price: 1950
            },
            2400: {
                price: 2350
            },
            3000: {
                price: 2750
            },
            3600: {
                price: 3100
            },
            4200: {
                price: 3450
            },
            4800: {
                price: 3850
            },
            5400: {
                price: 4250
            },
            6000: {
                price: 4600
            },
            6600: {
                price: 5000
            },
            7200: {
                price: 5400
            },
            7800: {
                price: 5750
            },
            8400: {
                price: 6150
            },
            9000: {
                price: 6500
            },
            9600: {
                price: 6900
            },
            10200: {
                price: 6700
            },
            10800: {
                price: 6700
            },
            11400: {
                price: 6700
            },
            12000: {
                price: 6700
            },
            12600: {
                price: 6700
            },
            13200: {
                price: 6700
            },
            13800: {
                price: 6700
            },
            14400: {
                price: 6700
            },
            15000: {
                price: 6700
            },
            15600: {
                price: 6700
            },
            16200: {
                price: 6700
            },
            16800: {
                price: 6700
            },
            17400: {
                price: 6700
            }
        }
    },
    3: {
        name: 'CERAMIC/CARBON <br> [Far Infrared]',
        k: 1.2,
        img: '/calc/images/StepHeater4.jpg',
        is_carbon: true,
        watt_prices: {
            600: {
                price: 1700
            },
            1200: {
                price: 2100
            },
            1800: {
                price: 2450
            },
            2400: {
                price: 2850
            },
            3000: {
                price: 3250
            },
            3600: {
                price: 3600
            },
            4200: {
                price: 4000
            },
            4800: {
                price: 4350
            },
            5400: {
                price: 4750
            },
            6000: {
                price: 5150
            },
            6600: {
                price: 5500
            },
            7200: {
                price: 5900
            },
            7800: {
                price: 6250
            },
            8400: {
                price: 6650
            },
            9000: {
                price: 7000
            },
            9600: {
                price: 7400
            },
            10200: {
                price: 6700
            },
            10800: {
                price: 6700
            },
            11400: {
                price: 6700
            },
            12000: {
                price: 6700
            },
            12600: {
                price: 6700
            },
            13200: {
                price: 6700
            },
            13800: {
                price: 6700
            },
            14400: {
                price: 6700
            },
            15000: {
                price: 6700
            },
            15600: {
                price: 6700
            },
            16200: {
                price: 6700
            },
            16800: {
                price: 6700
            },
            17400: {
                price: 6700
            }
        }
    },
    
    4: {
        name: 'FULL SPECTRUM <br> [Near, Mid, Far Infrared]',
        k: 1.1,
        img: '/calc/images/StepHeater1.jpg',
        is_carbon: true,
        watt_prices: {
            600: {
                price: 1800
            },
            1200: {
                price: 2200
            },
            1800: {
                price: 2600
            },
            2400: {
                price: 3000
            },
            3000: {
                price: 3350
            },
            3600: {
                price: 3750
            },
            4200: {
                price: 4150
            },
            4800: {
                price: 4500
            },
            5400: {
                price: 4900
            },
            6000: {
                price: 5250
            },
            6600: {
                price: 5650
            },
            7200: {
                price: 6000
            },
            7800: {
                price: 6400
            },
            8400: {
                price: 6750
            },
            9000: {
                price: 7150
            },
            9600: {
                price: 7550
            },
            10200: {
                price: 6700
            },
            10800: {
                price: 6700
            },
            11400: {
                price: 6700
            },
            12000: {
                price: 6700
            },
            12600: {
                price: 6700
            },
            13200: {
                price: 6700
            },
            13800: {
                price: 6700
            },
            14400: {
                price: 6700
            },
            15000: {
                price: 6700
            },
            15600: {
                price: 6700
            },
            16200: {
                price: 6700
            },
            16800: {
                price: 6700
            },
            17400: {
                price: 6700
            }
        }
    },
    
    5: {
        name: 'RADIANT CERAMIC <br> [Far Infrared]',
        k: 1.1,
        img: '/calc/images/StepHeater5.jpg',
        watt_prices: {
            600: {
                price: 950
            },
            1200: {
                price: 1300
            },
            1800: {
                price: 1650
            },
            2400: {
                price: 2250
            },
            3000: {
                price: 2600
            },
            3600: {
                price: 3000
            },
            4200: {
                price: 3350
            },
            4800: {
                price: 3750
            },
            5400: {
                price: 4150
            },
            6000: {
                price: 4500
            },
            6600: {
                price: 4850
            },
            7200: {
                price: 5250
            },
            7800: {
                price: 5650
            },
            8400: {
                price: 6000
            },
            9000: {
                price: 6400
            },
            9600: {
                price: 6800
            },
            10200: {
                price: 6700
            },
            10800: {
                price: 6700
            },
            11400: {
                price: 6700
            },
            12000: {
                price: 6700
            },
            12600: {
                price: 6700
            },
            13200: {
                price: 6700
            },
            13800: {
                price: 6700
            },
            14400: {
                price: 6700
            },
            15000: {
                price: 6700
            },
            15600: {
                price: 6700
            },
            16200: {
                price: 6700
            },
            16800: {
                price: 6700
            },
            17400: {
                price: 6700
            }
        }
    },
    6: {
        name: 'RADIANT - CERAMIC/CARBON <br>[Far Infrared]',
        k: 1.1,
        img: '/calc/images/StepHeater5.jpg',
        watt_prices: {
            600: {
                price: 950
            },
            1200: {
                price: 1300
            },
            1800: {
                price: 1650
            },
            2400: {
                price: 2250
            },
            3000: {
                price: 2600
            },
            3600: {
                price: 3000
            },
            4200: {
                price: 3350
            },
            4800: {
                price: 3750
            },
            5400: {
                price: 4150
            },
            6000: {
                price: 4500
            },
            6600: {
                price: 4850
            },
            7200: {
                price: 5250
            },
            7800: {
                price: 5650
            },
            8400: {
                price: 6000
            },
            9000: {
                price: 6400
            },
            9600: {
                price: 6800
            },
            10200: {
                price: 6700
            },
            10800: {
                price: 6700
            },
            11400: {
                price: 6700
            },
            12000: {
                price: 6700
            },
            12600: {
                price: 6700
            },
            13200: {
                price: 6700
            },
            13800: {
                price: 6700
            },
            14400: {
                price: 6700
            },
            15000: {
                price: 6700
            },
            15600: {
                price: 6700
            },
            16200: {
                price: 6700
            },
            16800: {
                price: 6700
            },
            17400: {
                price: 6700
            }
        }
    }
};

const step_rules = {
    1: false,
    2: false
};

$(document).ready(function () {
    $('.last-step form input[type=submit]').attr('disabled', 'disabled');
    //Step 1
    var watts_html = '<select class="form-control"><option value="">SELECT WATT</option>';
    $.each(watts_and_volts, function (watt, volts) {
        watts_html += '<option value="' + watt + '">' + watt + ' Watt</option>';
    });
    watts_html += '</select>';
    $('#pc_watts').html(watts_html);

    //Step 2
    var kits_type = '';
    $.each(heaters, function (id, kit) {
        var is_carbon = ' validate';
        if (kit.is_carbon != undefined && kit.is_carbon == true) {
            is_carbon = 'class="is_carbon validate"';
        }
        kits_type += '<label class="pc-kit-item">\n\
            <input ' + is_carbon + ' type="checkbox" name="kit_type[]" value="' + id + '"/>\n\
            <img src="https://infraredsaunaparts.com' + kit.img + '"/>\n\
			<div class="name">' + kit.name + '</div>\n\
<select class="form-control mt-2">\n\
<option value="Low EMF">Low EMF</option>\n\
<option value="Zero EMF">Zero EMF</option>\n\
</select>\n\
        </label>';
    });
    $('#kits_type').html(kits_type);

    if ($('input[name="pc_width"]').val() != '' && $('input[name="pc_depth"]').val() != '' && $('input[name="pc_height"]').val() != '') {
        if (pc_check_size()) {
            $('#pc_watts, #pc_volts, #pc_wv_info').css('display', 'block');
            pc_calculate_watts();
        }
    }
})

$(document).on('change', '.pc-radio input[type=radio]', function () {
    $(this).closest('.pc-block').find('label').not('.pc-n-radio').removeClass('active');
    $(this).parent('label').addClass('active');
});
$(document).on('change', '.pc-radio input[name="pc_control_panel_wifi"]', function () {
    if (this.checked) {
        $(this).parent('label').addClass('active');
    } else {
        $(this).parent('label').removeClass('active');
    }
    pc_calculate();
});
$(document).on('change', '#pc_watts select', function () {
    var value = $(this).val();
    if (value != '') {
        if (watts_and_volts[value] != undefined) {
            $('.pc-kit-item input:checked').attr('checked', false);

            //Vats
            pc_create_volts(value);
        } else {
            alert('Request error');
        }
    } else {
        $('#pc_volts').html('');
        $('.ps-step1').nextAll().addClass('disabled');
        $('.pc-kit-item input:checked').attr('checked', false);
    }
});
$('input[name="pc_width"],input[name="pc_depth"],input[name="pc_height"]').bind('keyup mouseup', function () {
    if (pc_check_size()) {
        //Расчёт
        $('#pc_watts, #pc_volts, #pc_wv_info').css('display', 'block');
        pc_calculate_watts();


        if ($('#pc_watts select').val() != '' && ($('#pc_volts select').length > 0 && $('#pc_volts select').val() != '')) {
            $('.ps-step2').removeClass('disabled');
        }
    } else {
        $('.ps-step1').nextAll().addClass('disabled');
        $('#pc_watts, #pc_volts, #pc_wv_info').css('display', 'none');
    }
});
$(document).on('change', '#pc_volts select', function () {
    if (pc_check_size())
        $('.ps-step2').removeClass('disabled');
});
$(document).on('change', '.pc-kit-item input', function () {
    if ($(this).prop('checked')) {
        $(this).parent('label').addClass('active');
    } else {
        $(this).parent('label').removeClass('active');
    }
    if ($('.pc-kit-item input:checked').length > 0) {
        //Calculate
        pc_calculate();
    }
    if ($('.pc-kit-item .is_carbon:checked').length > 0) {
        $('.step.wood-trim-heaters').removeClass('d-none');
    } else {
        $('.step.wood-trim-heaters').addClass('d-none');
    }
    $('body').attr('style', 'counter-reset: 1');
});
$(document).on('click', '.pc-next', function () {
    $('ul.pc-tabs__caption li.active')
            .nextAll('li:not(.disabled):not(.ps-hidden)')
            .first()
            .addClass('active')
            .siblings()
            .removeClass('active')
            .closest('div.pc-tabs')
            .find('div.pc-tabs__content')
            .removeClass('active')
            .eq($('ul.pc-tabs__caption li.active').index())
            .addClass('active');
    return false;
});
$(document).on('click', '.pc-prev', function () {
    $('ul.pc-tabs__caption li.active')
            .prevAll('li:not(.disabled):not(.ps-hidden)')
            .first()
            .addClass('active')
            .siblings()
            .removeClass('active')
            .closest('div.pc-tabs')
            .find('div.pc-tabs__content')
            .removeClass('active')
            .eq($('ul.pc-tabs__caption li.active').index())
            .addClass('active');
    return false;
});
$(document).on('change', '.pc-radio input[type="radio"]', function () {
    pc_calculate();
});

$(document).on('click', '.stepper .step', function () {
    pc_calculate();
});

$(document).on('change', '#pc_volts select', function () {
    pc_create_lal_volts();
    pc_calculate();
});
$(document).on('change', 'select[name=pc_units]', function () {
    pc_calculate_watts();
});

$(document).on('change', '.pc-select-qty', function () {

    $(this).parent('label').parent('.pc-block').next('.pc-helper-block').find('.pc-helper').html('').css('display', 'none');
    $.each($('.pc-select-qty'), function (k, o) {
        if ($(o).val() > 0) {
            $(o).parent('label').parent('.pc-block').next('.pc-helper-block').find('.pc-helper').html(lights_and_lamps_helper).css('display', 'block');
        }
    });
    pc_calculate();
});
$(document).on('change', '.pc-select-volts, #kits_type select', function () {
    pc_calculate();
});

$(document).on('change', 'input[name="pc_speakers"]', function () {
    if ($(this).val() == 'none') {
        $(this).parent('label').parent('.pc-block').next('.pc-helper-block').find('.pc-helper').html('').css('display', 'none');
    } else {
        $(this).parent('label').parent('.pc-block').next('.pc-helper-block').find('.pc-helper').html(stereo_system_helper).css('display', 'block');
    }
});

$(document).on('click', '.layouts img', function(){
    $('.layouts img').removeClass('selected');
    $(this).addClass('selected');
    
    if($(this).attr('data-custom') != undefined){
        $('#pc_watts, #pc_volts, #pc_wv_info').css('display', 'none');
        $('input[name=pc_width]').val('');
        $('input[name=pc_height]').val('');
        $('input[name=pc_depth]').val('');
        //$('.ps-size').css('display', 'block');
        
    }else{
        let width = $(this).attr('data-width');
        let height = $(this).attr('data-height');
        let depth = $(this).attr('data-depth');
        
        $('input[name=pc_width]').val(width);
        $('input[name=pc_height]').val(height);
        $('input[name=pc_depth]').val(depth);
        
        $('#pc_watts, #pc_volts, #pc_wv_info').css('display', 'block');
        //$('.ps-size').css('display', 'none');
        pc_calculate_watts();
        $([document.documentElement, document.body]).animate({
            scrollTop: ($('.ps-size-block').offset().top - 50)
        }, 500);
    }
});

function pc_create_lal_volts() {
    $('.pc-select-volts').html('<option value="' + $('#pc_volts select option:selected').val() + '">' + $('#pc_volts select option:selected').val() + '</option>\n\
	<option value="' + lights_and_lamps_volt + '" data-price="' + lights_and_lamps_volt_price + '">' + lights_and_lamps_volt + '</option>');
}

function pc_create_volts(value) {
    var volts = watts_and_volts[value].volts.split('|');
    var volts_html = '<select class="form-control">';
    $.each(volts, function (key, vat) {
        volts_html += '<option value="' + vat + '">' + vat + '</option>';
    });
    volts_html += '</select>';
    $('#pc_volts').html(volts_html);
    pc_create_lal_volts();
    if (pc_check_size())
        $('.ps-step2').removeClass('disabled');
}

function pc_calculate_watts() {
    var k = 1;
    if ($('select[name=pc_units]').val() == 'inch')
        k = 12;
    var width = $('input[name="pc_width"]').val();
    var depth = $('input[name="pc_depth"]').val();
    var height = $('input[name="pc_height"]').val();
    var sq = 0;
    var is_calc = false;

    sq = Math.ceil((k * width / k * depth / k * height / k * 23));

    //console.log(sq)
    $('#pc_wv_info').text('You need ' + sq + ' Watts minimum');

    $("#pc_watts select option").prop('selected', false)
    $("#pc_watts select option").attr('selected', false)

    $.each($('#pc_watts select option'), function (k, o) {
        if ($(o).val() - sq >= 0) {
            console.log($(o).val());
            $(o).prop('selected', true);
            $(o).attr('selected', true);
            pc_create_volts($(o).val());
            is_calc = true;
            return false;
        }
    });

    if (!is_calc) {
        if (sq <= 600) {
            $("#pc_watts select option[value=600]").prop('selected', true);
            $("#pc_watts select option[value=600]").attr('selected', true);
            pc_create_volts($("#pc_watts select option[value=600]").val());
        } else {
            $("#pc_watts select option:last").prop('selected', true);
            $("#pc_watts select option:last").attr('selected', true);
            pc_create_volts($("#pc_watts select option:last").val());
        }
    }
}

function pc_check_size() {
    var width = $('input[name="pc_width"]').val();
    var depth = $('input[name="pc_depth"]').val();
    var height = $('input[name="pc_height"]').val();

    if (width != '' && depth != '' && height != '' &&
            width > 0 && depth > 0 && height > 0) {
        return true;
    }
    return false;
}

function pc_calculate() {
    var watt = $('#pc_watts select').val();
    var volt = $('#pc_volts select').val();
    var volt_price = 0;
    var heaters_obj = $('#kits_type input:checked');
    var result = {};
    var prices = [];
    var heaters_o = {};
    var width = $('input[name="pc_width"]').val();
    var depth = $('input[name="pc_depth"]').val();
    var height = $('input[name="pc_height"]').val();
    
    /*$('.stepper').addClass('linear');
    
    if (watts_and_volts[watt] == undefined) {
        console.log('Calculate error');
        return false;
    }

    if (heaters_obj.length == 0) {
        console.log('Please, select heater');
        return false;
    }

    if (volt_prices[volt] != undefined) {
        volt_price = volt_prices[volt];
    }
    
    $.each(heaters_obj, function (key, heater) {
        if (heaters[$(heater).val()]['watt_prices'][watt]['price'] == undefined) {
            alert('Calculate error!');
            return false;
        }
        //var start_price = Math.ceil(watts_and_volts[watt]['price']*heaters[$(heater).val()]['k']+volt_price);
        var start_price = Math.ceil(heaters[$(heater).val()]['watt_prices'][watt]['price'] + volt_price);
        var end_price = start_price;
        var options = {};
        var k_o = 0;
        var low_or_zero = $(heater).closest('.pc-kit-item').find('select').val();
        if ($('.pc-radio input[name="pc_control_panel_wifi"]').prop('checked')) {
            k_o++;
            options[k_o] = {
                //name: $('.pc-radio input[name="pc_control_panel_wifi"]').val().replace(/\r|\n/g, '') + ' (+$' + $('.pc-radio input[name="pc_control_panel_wifi"]').attr('data-price') + ')'
                name: $('.pc-radio input[name="pc_control_panel_wifi"]').val().replace(/\r|\n/g, '')
            };
            end_price += Math.ceil($('.pc-radio input[name="pc_control_panel_wifi"]').attr('data-price'));
        }
        $.each($('.pc-radio input[type=radio]:checked'), function (k1, o1) {
            k_o = k_o + k1 + 1;
            if ($(o1).attr('data-price') != undefined) {
                end_price += Math.ceil($(o1).attr('data-price'))
            } else if ($(o1).attr('data-percent') != undefined) {
                end_price += Math.ceil(start_price * $(o1).attr('data-percent') / 100)
            }
            if ($(o1).val() != 'none') {
                options[k_o] = {
                    name: $(o1).parent('label').text().replace(/\r|\n/g, '')
                };
            }
        });
        
        $.each($('.step-content .pc-select-qty'), function (k2, o1) {
            if ($(o1).val() > 0) {
                var k_o_price = Math.ceil($(o1).attr('data-price') * $(o1).val());
                if ($(o1).next('.pc-select-volts').val() == lights_and_lamps_volt) {
                    k_o_price += Math.ceil(lights_and_lamps_volt_price * (parseInt($(o1).find('option:last').val()) / 4 >> 0));
                }
                k_o_price = Math.ceil(k_o_price);
                k_o++;
                options[k_o] = {
                    //name: $(o1).attr('data-title').replace(/\r|\n/g, '') + ', qty. ' + $(o1).val() + ", " + $(o1).next('.pc-select-volts').val() + ' (+$' + k_o_price + ')'
                    name: $(o1).attr('data-title').replace(/\r|\n/g, '') + ', qty. ' + $(o1).val() + ", " + $(o1).next('.pc-select-volts').val()
                };
                end_price += k_o_price;

                //Volts


            }
        });

        heaters_o[key] = {
            heater_name: heaters[$(heater).val()]['name'] + ", " + low_or_zero,
            start_price: start_price,
            end_price: end_price,
            options: options
        };
        prices.push(end_price);

    });
    
    $('.stepper').removeClass('linear');
    
    result['heaters'] = heaters_o;
    result['watt'] = watt;
    result['volt'] = volt;
    result['min_price'] = Math.min.apply(null, prices);
    result['max_price'] = Math.max.apply(null, prices);
    //console.log(result);
    //text
    //$('#pc_finish').html('Approximate Price Quote: $' + result['min_price'] + ($(heaters_obj).length > 1 ? ' - $' + result['max_price'] : ''));

    var width = $('input[name="pc_width"]').val();
    var depth = $('input[name="pc_depth"]').val();
    var height = $('input[name="pc_height"]').val();
    var mail_text = "Watt: " + result['watt'] + "\n";
    mail_text += "Volt: " + result['volt'] + "\n\n";
    mail_text += "Size: " + width + "x" + depth + "x" + height + " " + $('select[name=pc_units]').val() + ".\n\n";
    var result_text = "<div class='item'>Watt: <strong>" + result['watt'] + "</strong>, ";
    result_text += "Volt: <strong>" + result['volt'] + "</strong>, ";
    result_text += "Size: <strong>" + width + "x" + depth + "x" + height + " " + $('select[name=pc_units]').val() + ".</strong></div>";
    $.each(result['heaters'], function (key, heater) {
        mail_text += heater.heater_name + " (Options: " + $.map(heater.options, function (val, i) {
            return val.name;
        }).join(', ');
        +")";
        mail_text += "\n\n";
        result_text += '<div class="item">' + heater.heater_name + " (Options: " + $.map(heater.options, function (val, i) {
            return val.name;
        }).join(', ') + ")" + "</div>";
        /*
         mail_text += heater.heater_name + " $" + heater.end_price + " (Options: " + $.map( heater.options, function( val, i ) {
         return val.name;
         }).join(', '); + ")";
         mail_text += "<br/><br/>\n\n";
         result_text += '<div class="item">' + heater.heater_name + " $" + heater.end_price + " (Options: " + $.map( heater.options, function( val, i ) {
         return val.name;
         }).join(', ') + ")" + "</div>";
         */
    //});*/
    
    //New
    let steps = "";
    let has_error = false;
    $.each($('li.step:not(.d-none)'), function(key, step){
        let step_number = key+1;        
        let note = ($(step).find('textarea[data-note]').val() || "").trim();
        if(step_number == 1){
            steps += `<a class="step-result-number" data-step="${step_number}">Step ${step_number} - Sizes</a>`;
            if(width == '' || depth == '' || height == ''){
                steps += `<p class="error">Please, enter the dimensions of the sauna</p>`;
                has_error = true;
            }else{
                steps += `<ul class="item">
                    <li><strong>${watt}</strong> Watt</li> 
                    <li><strong>${volt}</strong> Volt</li>
                    <li>Size - <strong>${width}x${depth}x${height} ${$('select[name=pc_units]').val()}</strong></li>`;
                if(note != ''){
                    steps += `<li>Note - ${note}</li>\n`;
                }
                steps += `</ul>\n\n`;
            }
        }else if(step_number == 2){       
            let items = $(step).find('.pc-kit-item.active');
            steps += `<a class="step-result-number" data-step="${step_number}">Step ${step_number} - Heater Type</a>\n`;
            if(!items.length){
                steps += `<p class="error">Please, select control panel</p>`;
                has_error = true;
            }else{
                steps += `<ul class="item">`;
                $.each(items, function(item_key, item){
                    steps += `<li>${$(item).find('.name').text()} (${$(item).find('select').val()})</li>\n`;
                });
                if(note != ''){
                    steps += `<li>Note - ${note}</li>\n`;
                }
                steps += `</ul>\n`;
            }  
        }else if(step_number == 3){       
            let items = $(step).find('label.active');
            if(items.length){
                steps += `<a class="step-result-number" data-step="${step_number}">Step ${step_number} - Control Panel Type</a>\n`;
                steps += `<ul class="item">`;
                $.each(items, function(item_key, item){
                    steps += `<li>${$(item).find('input').val()}</li>\n`;
                });
                if(note != ''){
                    steps += `<li>Note - ${note}</li>\n`;
                }
                steps += `</ul>\n`;
            }
        }else if(step_number == 4){       
            let items = $(step).find('label.active');
            if(items.length){
                steps += `<a class="step-result-number" data-step="${step_number}">Step ${step_number} - Wood Trim for Heaters</a>\n`;
                steps += `<ul class="item">`;
                $.each(items, function(item_key, item){
                    steps += `<li>${$(item).find('input').val()}</li>\n`;
                });
                if(note != ''){
                    steps += `<li>Note - ${note}</li>\n`;
                }
                steps += `</ul>\n`;
            }
        }else if(step_number == 5){       
            let items = $(step).find('label.active');
            if(items.length){
                steps += `<a class="step-result-number" data-step="${step_number}">Step ${step_number} - Wood for Walls</a>\n`;
                steps += `<ul class="item">`;
                $.each(items, function(item_key, item){
                    steps += `<li>${$(item).find('input').val()}</li>\n`;
                });
                if(note != ''){
                    steps += `<li>Note - ${note}</li>\n`;
                }
                steps += `</ul>\n`;
            }
        }else if(step_number == 6){       
            let items = $(step).find('label.active');
            if(items.length){
                steps += `<a class="step-result-number" data-step="${step_number}">Step ${step_number} - Insulation</a>\n`;
                steps += `<ul class="item">`;
                $.each(items, function(item_key, item){
                    steps += `<li>${$(item).find('input').val()}</li>\n`;
                });
                if(note != ''){
                    steps += `<li>Note - ${note}</li>\n`;
                }
                steps += `</ul>\n`;
            }
        }else if(step_number == 7){       
            let items = $(step).find('.pc-select-qty');
            if(items.length){
                let text = "";                
                $.each(items, function(item_key, item){
                    if($(item).val() > 0){
                        text += `<li>${$(item).attr('data-title')} ${$(item).next('.pc-select-volts').val()}, qty. ${$(item).val()}</li>\n`;
                    }
                });
                if(text != ""){
                    steps += `<a class="step-result-number" data-step="${step_number}">Step ${step_number} - Lights and Lamps</a>\n`;
                    steps += `<ul class="item">`;
                    steps += text;
                    if(note != ''){
                        steps += `<li>Note - ${note}</li>\n`;
                    }
                    steps += `</ul>\n`;
                }
            }
        }else if(step_number == 8){       
            let items = $(step).find('label.active');
            if(items.length){
                steps += `<a class="step-result-number" data-step="${step_number}">Step ${step_number} - Stereo System</a>\n`;
                steps += `<ul class="item">`;
                $.each(items, function(item_key, item){
                    steps += `<li>${$(item).find('input').val()}</li>\n`;
                });
                if(note != ''){
                    steps += `<li>Note - ${note}</li>\n`;
                }
                steps += `</ul>\n`;
            }
        }else if(step_number == 9){       
            let items = $(step).find('label.active');
            if(items.length){
                steps += `<a class="step-result-number" data-step="${step_number}">Step ${step_number} - Ionizers</a>\n`;
                steps += `<ul class="item">`;
                $.each(items, function(item_key, item){
                    steps += `<li>${$(item).find('input').val()}</li>\n`;
                });
                if(note != ''){
                    steps += `<li>Note - ${note}</li>\n`;
                }
                steps += `</ul>\n`;
            }
        }else if(step_number == 10){       
            let items = $(step).find('label.active');
            if(items.length){
                steps += `<a class="step-result-number" data-step="${step_number}">Step ${step_number} - Chromotherapy</a>\n`;
                steps += `<ul class="item">`;
                $.each(items, function(item_key, item){
                    steps += `<li>${$(item).find('input').val()}</li>\n`;
                });
                if(note != ''){
                    steps += `<li>Note - ${note}</li>\n`;
                }
                steps += `</ul>\n`;
            }
        }
    });
    if(has_error){
        $('.last-step form input[type=submit]').attr('disabled', 'disabled');
    }else{
        $('.last-step form input[type=submit]').attr('disabled', false);
    }
    //End new
    
    //$('.calc-data textarea').val(mail_text);
    //$('.pc-result-msg').html(result_text);
    $('.calc-data textarea').val(steps.replace(/<[^>]*>/g, ''));
    $('.pc-result-msg').html(steps);
}