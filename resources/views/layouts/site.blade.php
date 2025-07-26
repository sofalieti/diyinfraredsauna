<!DOCTYPE html>
<html lang="ru">
    <head>
        
        
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{$title ?? ""}}</title>
        <meta name="keywords" content="{{$keywords ?? ""}}" />
        <meta name="description" content="{{$description ?? ""}}"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="robots" content="index, follow" />
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <link href="{!! asset('/fonts/fontawesome-free-5.8.1/css/all.min.css') !!}" type="text/css" rel="stylesheet" />
        <link href="{!! asset('/fonts/OpenSans/stylesheet.css') !!}" type="text/css" rel="stylesheet" />
        <link href="{!! asset('/css/bootstrap.min.css') !!}" type="text/css" rel="stylesheet" />
        <link href="{!! asset('/libs/fancybox-master/dist/jquery.fancybox.min.css') !!}" rel="stylesheet" type="text/css">
        <link href="{!! asset('/libs/WOW-master/css/libs/animate.css') !!}" type="text/css" rel="stylesheet" />
        <link href="{!! asset('/libs/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css') !!}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://unpkg.com/materialize-stepper@3.1.0/dist/css/mstepper.min.css">
        <link href="{!! asset('/css/app.css?'.rand(1,1000)) !!}" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.css"/>
        <link href="{!! asset('/libs/diy_calculator/style.css?v1') !!}" type="text/css" rel="stylesheet" />
        <link href="{!! asset('/css/app-responsive.css?'.rand(1,1000)) !!}" type="text/css" rel="stylesheet" />
        <!-- Global site tag (gtag.js) - Google Analytics -->
<!-- Google tag (gtag.js) -->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-56KMZPV3');</script>
<!-- End Google Tag Manager -->

    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-56KMZPV3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
        
        <header class="{{isset($main_banner) && $main_banner ? 'with-video-banner' : ''}}">
            <nav class="navbar navbar-expand-lg fixed-top top-menu">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#topMenu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                        <span>Menu</span>
                    </button>
                    <div class="collapse navbar-collapse" id="topMenu">
                        @include('menu.top')
                        <?php
                        /*<div class="city-block">
                            <i class="fas fa-map-marker-alt"></i> 
                            <a href="#" class="text-nowrap">New York</a>
                        </div>*/
                        ?>
                    </div>
                    <a href="/" class="m-logo mx-auto d-block d-lg-none"><img src="/images/m_logo.svg" height="46"/></a>
                    <div class="top-btns d-flex">
                        <a href="/build-your-sauna.html" class="btn top-btn"><i class="fas fa-tools"></i><span class="d-none d-lg-inline"> Configure you DIY Sauna</span></a>
                        <a href="#" class="btn top-btn d-block d-lg-none" data-toggle="modal" data-target="#form_1"><i class="far fa-comment"></i></a>
                        <a href="#" class="btn top-btn d-block d-lg-none" data-toggle="modal" data-target="#contactsModal"><i class="fas fa-phone"></i></a>
                    </div>
                </div>
            </nav>
            <div class="container position-relative m-header d-none d-lg-block">
                <div class="row py-3 align-items-center">
                    <div class="col-lg-2 col-6 logo-block">
                        <a href="/" title="">
                            @if(request()->route()->getName() == 'home')
                            <img src="/images/w_logo.svg" alt=""/>
                            @else
                            <img src="/images/logo.svg" alt=""/>
                            @endif
                        </a>
                    </div>
                    <div class="col-lg-8 phones-block">
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="phone mr-5">
                                <span>Tool free:</span>
                                <a href="tel: +1-888-559-(7278)">+1-888-559-PART (7278)</a>
                            </div>
                            <div class="phone mr-5">
                                <span>24/7 Texting/SMS:</span>
                                <a href="tel: +1-347-746-1765">+1-347-746-1765</a>
                            </div>
                            <div class="phone">
                                <span>International:</span>
                                <a href="tel: +1-718-709-PART (7278)">+1-718-709-PART (7278)</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-6 text-right">
                        <a href="#" data-toggle="modal" data-target="#form_1" class="btn-consultation btn btn-primary">Consultation</a>
                        @include('forms.modal', ['form_id' => 1])
                    </div>
                </div>
            </div>
            @if(isset($main_banner) && $main_banner)
            @include('blocks.html.main_banner')
            @endif
        </header>

        <div class="content" {!!isset($page) && !empty($page->page_color) ? 'style="background-color: '.$page->page_color.';"' : ''!!}>
            @if((!isset($page) || (isset($page) && !$page->hide_breadcrumbs)) && isset($breadcrumbs))
            @include('blocks.breadcrumbs')
            @endif
            @yield('content')
        </div>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        Copyright © 2020-2025 InfraredSaunaParts.com
                    </div>
                    <div class="col-lg-6 text-center text-lg-right">
                        Toll Free 888-559-PART(7278)
                    </div>
                </div>
            </div>
        </footer>
        @section('footer')     
        <div class="modal fade" id="contactsModal" tabindex="-1" role="dialog" aria-labelledby="contactsModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="contactsModalLabel">Contacts</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="phone">
                            <span>Tool free:</span>
                            <a href="tel: +1-888-559-(7278)">+1-888-559-PART (7278)</a>
                        </div>
                        <div class="phone">
                            <span>24/7 Texting/SMS:</span>
                            <a href="tel: +1-347-746-1765">+1-347-746-1765</a>
                        </div>
                        <div class="phone">
                            <span>International:</span>
                            <a href="tel: +1-718-709-PART (7278)">+1-718-709-PART (7278)</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @show
        
                 @include('blocks.sticky-help-block')
        
        @section('javascript')
        <script type="text/javascript" src="{!! asset('/js/popper.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('/js/jquery-3.4.0.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('/js/jquery.form.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('/js/jquery.mask.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('/js/bootstrap.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('/libs/WOW-master/dist/wow.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('/libs/OwlCarousel2-2.3.4/dist/owl.carousel.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('/libs/fancybox-master/dist/jquery.fancybox.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('/libs/diy_calculator/app.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('/js/jquery.validate.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('/js/mstepper.js') !!}"></script>
        <script src="https://www.google.com/recaptcha/api.js?onload=ReCaptchaCallback&render=explicit" async defer></script>
        
        <script src="https://unpkg.com/simplebar@latest/dist/simplebar.min.js"></script>
        
        <script type="text/javascript" src="{!! asset('/js/app.js?'.rand(1,1000)) !!}"></script>
        <script type="text/javascript" src="{!! asset('/libs/diy_calculator/stepper_app.js?v3') !!}"></script> 
        <script type="text/javascript">
            var recaptcha = [];
            var ReCaptchaCallback = function() {
                $('.g-recaptcha').each(function(key, obj){
                    var el = $(this);
                    recaptcha.push(grecaptcha.render(el.get(0), {'sitekey' : el.data("sitekey")}));
                });  
            };
        </script>
        @show
    </body>
</html>
