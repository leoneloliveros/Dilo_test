<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>ZTE NOC | Login </title>
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

    <!--end::Web font -->

    <!--begin::Global Theme Styles -->
    <link href="{{asset('assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />

    <!--RTL version:<link href="../../../assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->
    <link href="{{asset('assets/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />

    <!--RTL version:<link href="../../../assets/demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

    <!--end::Global Theme Styles -->
    <link rel="shortcut icon" href="{{asset('assets/media/img/logo/logo.png')}}" />
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-grid--tablet-and-mobile m-grid--hor-tablet-and-mobile m-login m-login--1 m-login--signin" id="m_login">
        <div class="m-grid__item m-grid__item--order-tablet-and-mobile-2 m-login__aside">
            <div class="m-stack m-stack--hor m-stack--desktop">
                <div class="m-stack__item m-stack__item--fluid">
                    <div class="m-login__wrapper">
                        <div class="m-login__logo">
                            <a href="#">
                                <img src="{{asset('zte-noc.png')}}" width="250px">
                            </a>
                        </div>
                        <!--LOGIN -->
                        <div class="m-login__signin">
                            <div class="m-login__head">
                                <h3 class="m-login__title">Ingresar al Sistema</h3>
                            </div>
                            <form class="m-login__form m-form" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group m-form__group">
                                    <input class="form-control m-input" type="text" placeholder="Usuario" name="username" autocomplete="off">
                                </div>
                                <div class="form-group m-form__group">
                                    <input class="form-control m-input" type="password" placeholder="Contraseña" name="password">
                                </div>
                                <div class="row m-login__form-sub">

                                    <div class="col m--align-right">
                                        <a href="javascript:;" id="m_login_forget_password" class="m-link">Olvido la Contraseña ?</a>
                                    </div>
                                </div>
                                <div class="m-login__form-action">
                                    <button id="m_login_signin_submit" class="btn btn-info m-btn m-btn--pill m-btn--custom m-btn--air">Iniciar Sesión</button>
                                </div>
                            </form>
                        </div>
                        <!--REGISTRO -->
                        <div class="m-login__signup">
                            <div class="m-login__head">
                                <h3 class="m-login__title">Solicitar Acceso</h3>
                                <div class="m-login__desc">Diligencie el formulario a continuación:</div>
                            </div>
                            <form class="m-login__form m-form" action="">
                                <div class="form-group m-form__group">
                                    <input class="form-control m-input" type="text" placeholder="Cedula" name="cedula">
                                </div>
                                <div class="form-group m-form__group">
                                    <input class="form-control m-input" type="text" placeholder="Nombres Y apellidos" name="name">
                                </div>
                                <div class="form-group m-form__group">
                                    <input class="form-control m-input" type="text" placeholder="Correo" name="email" autocomplete="off">
                                </div>
                                <div class="form-group m-form__group">
                                    <input class="form-control m-input" type="text" placeholder="Usuario" name="username">
                                </div>
                                <div class="form-group m-form__group">
                                    <textarea class="form-control m-input"  placeholder="Observaciones de acceso" name="descripcion"></textarea>
                                </div>


                                <div class="m-login__form-action">
                                    <button id="m_login_signup_submit" class="btn btn-info m-btn m-btn--pill m-btn--custom m-btn--air">Solicitar Acceso</button>
                                    <button id="m_login_signup_cancel" class="btn btn-outline-info  m-btn m-btn--pill m-btn--custom">Cancelar</button>
                                </div>
                            </form>
                        </div>
                        <!--RECUPERAR CONTRASEÑA -->
                        <div class="m-login__forget-password">
                            <div class="m-login__head">
                                <h3 class="m-login__title">Olvido La Contraseña ?</h3>
                                <div class="m-login__desc">Ingrese su correo electrónico para restablecer su contraseña:</div>
                            </div>
                            <form class="m-login__form m-form" method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="form-group m-form__group">
                                    <input class="form-control m-input" type="text" placeholder="Correo Electrónico" name="email" id="m_email" autocomplete="off">
                                </div>
                                <div class="m-login__form-action">
                                    <button id="m_login_forget_password_submit" class="btn btn-info m-btn m-btn--pill m-btn--custom m-btn--air">Solicitar</button>
                                    <button id="m_login_forget_password_cancel" class="btn btn-outline-info m-btn m-btn--pill m-btn--custom">Cancelar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="m-stack__item m-stack__item--center">
                    <div class="m-login__account">
								<span class="m-login__account-msg">
									No Tienes cuenta ?
								</span>&nbsp;&nbsp;
                        <a href="javascript:;" id="m_login_signup" class="m-link m-link--info m-login__account-link">Solicitar Acceso</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--center m-grid--hor m-grid__item--order-tablet-and-mobile-1	m-login__content m-grid-item--center" style="background-image: url({{asset('assets/media/img/bg-1.jpg')}})">
            <div class="m-grid__item">
                <h3 class="m-login__welcome"></h3>

            </div>
        </div>
    </div>
</div>

<!-- end:: Page -->

<!--begin::Global Theme Bundle -->
<script src="{{asset('assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/base/scripts.bundle.js')}}" type="text/javascript"></script>

<!--end::Global Theme Bundle -->

<!--begin::Page Scripts -->
<script src="{{asset('assets/snippets/custom/pages/user/login.js')}}" type="text/javascript"></script>

<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>
