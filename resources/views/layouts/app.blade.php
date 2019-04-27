<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>ZTENOC</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Montserrat:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
<style>
    .container-preloader {
        height: 100% !important;;
        width: 100% !important;;
        position:fixed;
        margin: 0;
        left:0;
        right:0;
        top:0;
        bottom:0;
        font-family: Helvetica;
        background-color: rgba(255,255,255,0.7);
        z-index:9999;
    }

    .loader {
        height: 20px;
        width: 250px;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
    }
    .loader--dot {
        animation-name: loader;
        animation-timing-function: ease-in-out;
        animation-duration: 3s;
        animation-iteration-count: infinite;
        height: 20px;
        width: 20px;
        border-radius: 100%;
        background-color: black;
        position: absolute;
        border: 2px solid white;
    }
    .loader--dot:first-child {
        background-color: #8cc759;
        animation-delay: 0.5s;
    }
    .loader--dot:nth-child(2) {
        background-color: #8c6daf;
        animation-delay: 0.4s;
    }
    .loader--dot:nth-child(3) {
        background-color: #ef5d74;
        animation-delay: 0.3s;
    }
    .loader--dot:nth-child(4) {
        background-color: #f9a74b;
        animation-delay: 0.2s;
    }
    .loader--dot:nth-child(5) {
        background-color: #60beeb;
        animation-delay: 0.1s;
    }
    .loader--dot:nth-child(6) {
        background-color: #fbef5a;
        animation-delay: 0s;
    }
    .loader--text {
        position: absolute;
        top: 200%;
        left: 0;
        right: 0;
        width: 4rem;
        margin: auto;
    }
    .loader--text:after {
        content: "Procesando";
        font-weight: bold;
        animation-name: loading-text;
        animation-duration: 3s;
        animation-iteration-count: infinite;
    }

    @keyframes loader {
        15% {
            transform: translateX(0);
        }
        45% {
            transform: translateX(230px);
        }
        65% {
            transform: translateX(230px);
        }
        95% {
            transform: translateX(0);
        }
    }
    @keyframes loading-text {
        0% {
            content: "Procesando";
        }
        25% {
            content: "Procesando.";
        }
        50% {
            content: "Procesando..";
        }
        75% {
            content: "Procesando...";
        }
    }
</style>
    <link href="{{asset('assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/vendors/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
   <link rel="shortcut icon" href="{{asset('assets/media/img/logo/logo.png')}}" />
</head>

<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

<div class="m-grid m-grid--hor m-grid--root m-page">

    @include('layouts.partials.header')
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
        <button class="m-aside-left-close m-aside-left-close--skin-dark" id="m_aside_left_close_btn"><i class="la la-close"></i></button>
        <div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
            <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark m-aside-menu--dropdown " data-menu-vertical="true" m-menu-dropdown="1" m-menu-scrollable="0" m-menu-dropdown-timeout="500">
                <ul class="m-menu__nav   m-menu__nav--dropdown-submenu-arrow ">
                    @include('layouts.partials.menu')
                </ul>
            </div>
        </div>
        <div class="m-grid__item m-grid__item--fluid m-wrapper">
            @yield('content');
            <div class='container-preloader' style="display: none" id="preload"  >
                <div class='loader'>
                    <div class='loader--dot'></div>
                    <div class='loader--dot'></div>
                    <div class='loader--dot'></div>
                    <div class='loader--dot'></div>
                    <div class='loader--dot'></div>
                    <div class='loader--dot'></div>
                    <div class='loader--text'></div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.partials.footer')
</div>
<div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
</div>
<script src="{{asset('assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/base/scripts.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/custom/highcharts/code/highcharts.js')}}"></script>
<script src="{{asset('assets/vendors/custom/highcharts/code/highcharts-3d.js')}}"></script>
<script src="{{asset('assets/vendors/custom/highcharts/code/modules/exporting.js')}}"></script>
<script src="{{asset('assets/vendors/custom/highcharts/code/modules/export-data.js')}}"></script>
<script>
    function requestPermission() {
        Notification.requestPermission(function(result) {
            if (result === 'denied') {
                requestPermission();
            } else if (result === 'default') {
                requestPermission();
            }
            // Hacer algo con el permiso concedido.
        });
    }
    $(document).ready(function () {
        requestPermission();

    })
</script>
@stack('scripts')
</body>
</html>
