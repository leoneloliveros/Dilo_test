<!doctype html>
<html lang="en">

<!-- Mirrored from envato.pixevil.com/metromega/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Feb 2019 14:14:52 GMT -->
<head>

    <meta charset="utf-8" />
    <title>ZTENOC</title>

    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no"/>

    <meta name="description" content="Network Manager V2"/>

    <meta name="keywords" content="responsive, metro, template, metromega, grozav"/>


    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,600' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{asset('netdna/bootstrap/3.0.3/css/bootstrap.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('netdna/bootswatch/3.0.3/cosmo/bootstrap.min.css')}}" type="text/css" />
    <link href="{{asset('/socicon/css/socicon.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/vendors/line-awesome/css/line-awesome.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/vendors/flaticon/css/flaticon.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/vendors/metronic/css/styles.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('vendors/fontawesome5/css/all.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" />




</head>
<body>

<!-- BACKGROUND -->
<img src="img/BizTech-HPE-Networking.jpg" class="background" alt="" />
<!-- /BACKGROUND -->

<!-- LOGO -->
<div class="header">
    <h1>
        <a data-scroll="scrollto"  href="#start">


        </a>
    </h1>
</div>
<!-- /LOGO -->

<!-- MAIN CONTENT SECTION -->
<section id="content">

    <!-- SECTION -->
    <section class="clearfix section" id="start">

        <!-- SECTION TITLE -->
        <h3 class="block-title" style="color: #0a6aa1" >Binvenido, {{currentUser()->name}}</h3>
        <!-- /SECTION TITLE -->

        <!-- SECTION TILES -->

        <div class="tile turquoise w1 h1 title-horizontalcenter icon-scaleuprotate360cw">
            <a class="link" href="{{route('export')}}">
                <i class="fa fa-download"></i>
                <p class="title">DESCARGABLES</p>
            </a>
        </div>
        <div class="tile red title-scaleup icon-featurefade  w2 h1">
            <a class="link"  href="{{route('gestor_combustible.estaciones_base')}}">
                <i class="fa fa-gas-pump"></i>
                <p class="title">GESTOR DE COMBUSTIBLE</p>
            </a>
        </div>
        <div class="tile title-scaleup icon-scaleuprotate360cw w2 h1">
            <a class="link" href="#contactform">
                <i class="fa fa-bolt"></i>
                <p class="title">DASHBOARD ENERGIA</p>
            </a>
        </div>
        <div class="tile orange w2 h1 icon-featurecw">
            <a href="#about" class="link">
                <i class="fa fa-broadcast-tower"></i>
                <p class="title">TORRE DE GESTION </p>
            </a>
        </div>

        <div class="tile blue title-verticalcenter icon-flip w2 h1">
            <a class="link" href="{{route('boTx.index')}}">
                <i class="fa flaticon-network"></i>
                <p class="title">BO-TXMW/SATEL</p>
            </a>
        </div>

        <div class="tile yellow title-scaleup icon-scaledownrotate360cw w2 h1">
            <a class="link"   href="{{route('mesa_calidad.tiempos')}}">
                <i class="fa flaticon-calendar-3"></i>
                <p class="title">Mesa Calidad</p>
            </a>
        </div>

        <div class="tile purple title-scaleup icon-scaledownrotate360cw w2 h1">
            <a class="link"  href="{{route('monitoreNetcool.index')}}">
                <i class="fa flaticon-computer"></i>
                <p class="title">Monitore NetCool</p>
            </a>
        </div>


        <div class="tile purple title-scaleup icon-scaledownrotate360cw w2 h1">
            <a class="link" data-scroll="scrollto"  href="#contactform">
                <i class="fa fa-envelope"></i>
                <p class="title">Monitor de Alarmas</p>
            </a>
        </div>

        <div class="tile purple title-scaleup icon-scaledownrotate360cw w2 h1">
            <a class="link" data-scroll="scrollto"  href="#contactform">
                <i class="fa fa-envelope"></i>
                <p class="title">Monitor Ip</p>
            </a>
        </div>
        <div class="tile purple title-scaleup icon-scaledownrotate360cw w2 h1">
            <a class="link" data-scroll="scrollto"  href="#contactform">
                <i class="fa fa-envelope"></i>
                <p class="title">Torre de Gestion</p>
            </a>
        </div>
        <div class="tile purple title-scaleup icon-scaledownrotate360cw w2 h1">
            <a class="link" data-scroll="scrollto"  href="#contactform">
                <i class="fa fa-envelope"></i>
                <p class="title">Notificador</p>
            </a>
        </div>

        <div class="tile purple title-scaleup icon-scaledownrotate360cw w2 h1">
            <a class="link" data-scroll="scrollto"  href="#contactform">
                <i class="fa fa-envelope"></i>
                <p class="title">Dashboard Front</p>
            </a>
        </div>
        <div class="tile purple title-scaleup icon-scaledownrotate360cw w2 h1">
            <a class="link" data-scroll="scrollto"  href="#contactform">
                <i class="fa fa-envelope"></i>
                <p class="title">Dashboard TX</p>
            </a>
        </div>
        <div class="tile purple title-scaleup icon-scaledownrotate360cw w2 h1">
            <a class="link" data-scroll="scrollto"  href="#contactform">
                <i class="fa fa-envelope"></i>
                <p class="title">Onyx</p>
            </a>
        </div>


    </section>


</section>
<!-- /MAIN CONTENT SECTION -->

<!-- LOCKSCREEN -->
<section class="mlightbox" id="lockscreen">
    <div id="lockscreen-content">
        <img src="img/logo.png" height="109" width="140" id="locklogo"  alt="Metromega"/>
        <br/><br/>
        <img src="img/preloader.gif" id="lockloader"  alt="Loading.."/>
    </div>
</section>
<!-- /LOCKSCREEN -->

<!-- SIDEBAR -->
<div id="opensidebar"><i class="fa flaticon-user fa-3x"></i></div>
<section id="sidebar">
    <ul>
        <li></li>
        <li><a title="Mi Perfil"  href="#"  ><i class="fa flaticon-user-settings fa fa-4x"></i></a></li>
        <li><a title="Notificaciones"  href="#" ><i class="fa flaticon-alert-2 fa fa-4x"></i></a></li>
        <li><a title="Soporte | Solicitudes"  href="#" ><i class="fa flaticon-questions-circular-button fa fa-4x"></i></a></li>
        <li><a title="Cerrar Sesión" href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                <i style="color: darkred" class="fa flaticon-close fa fa-4x"></i></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</section>
<!-- /SIDEBAR -->

<!-- PRELOADER -->
<section class="mlightbox" id="loader">
    <a href="#">
        <img src="img/preloader.gif" alt="Cargando.."/>
    </a>
</section>
<!-- /PRELOADER -->


<script src="{{asset('js/jquery-latest.min.js')}}" type="text/javascript"></script> <!-- jQuery Library -->
<script src="{{asset('js/respond.min.js')}}" type="text/javascript"></script> <!-- Responsive Library -->
<script src="{{asset('js/jquery.isotope.min.js')}}" type="text/javascript"></script> <!-- Isotope Layout Plugin -->
<script src="{{asset('js/jquery.mousewheel.js')}}" type="text/javascript"></script> <!-- jQuery Mousewheel -->
<script src="{{asset('js/jquery.mCustomScrollbar.js')}}" type="text/javascript"></script> <!-- malihu Scrollbar -->
<script src="{{asset('js/tileshow.js')}}" type="text/javascript"></script> <!-- Metromega Custom Tileshow Plugin -->
<script src="{{asset('js/mlightbox.js')}}" type="text/javascript"></script> <!-- Metromega Custom Lightbox Plugin -->
<script src="{{asset('js/jquery.touchSwipe.min.js')}}" type="text/javascript"></script> <!-- jQuery TouchSwipe Plugin -->
<script src="{{asset('js/jquery.fitVids.js')}}" type="text/javascript"></script> <!-- jQuery fitVids Plugin -->
<script src="{{asset('js/lockscreen.js')}}" type="text/javascript"></script> <!-- Metromega Lockscreen -->
<script src="{{asset('netdna/bootstrap/3.0.3/js/bootstrap.min.js')}}" type="text/javascript"></script> <!-- Bootstrap Library -->

<script src="{{asset('js/script.js')}}" type="text/javascript"></script> <!-- Metromega Script -->


</body>

<!-- Mirrored from envato.pixevil.com/metromega/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Feb 2019 14:17:21 GMT -->
</html>
