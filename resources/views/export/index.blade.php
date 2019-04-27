@extends('layouts.app')

@section('content')
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">Descargar Reportes</h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item m-nav__item--home">
                        <a href="#" class="m-nav__link m-nav__link--icon">
                            <i class="m-nav__link-icon la la-home"></i>
                        </a>
                    </li>
                    <li class="m-nav__separator">-</li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text">Mesa Calidad</span>
                        </a>
                    </li>
                    <li class="m-nav__separator">-</li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text">Exportables</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="m-content">

        <div class="m-portlet m-portlet--tabs">
            <div class="m-portlet__head">
                <div class="m-portlet__head-tools">
                    <ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
                        <li class="nav-item m-tabs__item">
                            <a class="nav-link m-tabs__link active show" data-toggle="tab" href="#m_builder_page" role="tab" aria-selected="true">
                                Seleccion de Reporte
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <!--begin::Form-->
            <form class="m-form m-form--label-align-right m-form--fit" action="#"  id="form-export">
                <div class="m-portlet__body">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="m_builder_page">
                            <div class="form-group m-form__group row">
                                <label class="col-lg-4 col-form-label">Tipo de Reporte:</label>
                                <div class="col-lg-8 col-xl-4">
                                    <select class="form-control" name="type">
                                        <option value=""></option>
                                        <option value="incident_tareas">Tareas</option>
                                        <option value="tareas_fo_performance">Tareas Performance</option>
                                        <option value="general">Informacion General</option>
                                        <option value="alarm">Alarmas</option>
                                        <option value="alarm_automatismo">Alarmas Automatismo</option>
                                        <option value="workinfo">WorkInfo</option>
                                        <option value="detallado">Historico Detallado</option>
                                        <option value="causales_cierre">Causales de Cierre</option>
                                        <option value="data_atencion">Data Atencion</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label class="col-lg-4 col-form-label">Fecha:</label>
                                <div class="col-lg-8 col-xl-4">
                                    <div class='input-group pull-right' id='m_daterangepicker_6'>
                                        <input type='text' class="form-control m-input" readonly placeholder="Rango de Fecha" name="fecha" required />
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
                                        </div>
                                    </div>
                                    <div class="m-form__help">Seleccione el Rango de fecha</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions">
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-6 ">
                                <div class=" dropup">
                                    <button type="submit" id="builder_export" class=" btn btn-accent m-btn m-btn--icon m-btn--wide m-btn--air m-btn--custom" aria-haspopup="true" aria-expanded="false">
                                        <span>
                                            <i class="fa fa-file-excel"></i>
                                            <span>Exportar</span>
                                        </span>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>

    </div>
@endsection
@push('scripts')
    <script>
        var BootstrapDaterangepicker = {
            init: function() {
                ! function() {
                    var a = moment().subtract(29, "days"),
                        t = moment();
                    $("#m_daterangepicker_6").daterangepicker({
                        buttonClasses: "m-btn btn",
                        applyClass: "btn-primary",
                        cancelClass: "btn-secondary",
                        startDate: a,
                        endDate: t,
                        ranges: {
                            Hoy: [moment(), moment()],
                            Ayer: [moment().subtract(1, "days"), moment().subtract(1, "days")],
                            "Últimos 7 Días": [moment().subtract(6, "days"), moment()],
                            "Últimos 30 días": [moment().subtract(29, "days"), moment()],
                            "Este Mes": [moment().startOf("month"), moment().endOf("month")],
                            "El mes pasado": [moment().subtract(1, "month").startOf("month"), moment().subtract(1, "month").endOf("month")]
                        }
                    },
                        function(a, t, n) {
                        $("#m_daterangepicker_6 .form-control").val(a.format("YYYY-MM-DD") + " / " + t.format("YYYY-MM-DD"))
                    })
                }()
            }
        };
        var  options  =   {
            body:   "",
            icon:   "{{asset('assets/media/img/logo/logo.png')}}",
            dir :   "ltr"
        };

        $(document).ready(function () {
            BootstrapDaterangepicker.init();
            $('#form-export').on('submit',function (e) {
                e.preventDefault();
                $('#preload').show('slow');

                $.get( "{{route('export.download')}}",$('#form-export').serialize(), function(res) {
                    options.body='Su informe se genero correctamente, se encuenta listo para descargar';
                    new  Notification("Informe Disponible", options);
                    $('#preload').fadeOut();

                    swal({
                        title: "Reporte Generado!",
                        text: "Click en el boton, para descargar Archivo!",
                        icon: "success",
                        confirmButtonText: "<span><i class='la la-download'></i><span>Descargar Archivo</span></span>",
                        confirmButtonClass: "btn btn-accent m-btn m-btn--pill m-btn--air m-btn--icon",
                        showCancelButton: false

                    }).then(function(e) {
                        if(res!=''){
                            location.href='{{asset('')}}'+res;
                        }
                    })
                })
                    .fail(function() {
                        options.body='Se presento un error al generar el informe, por favor intenta nuevamente, si el error persiste cominicate con el administrador';
                        new  Notification("Error!!!", options);
                        $('#preload').fadeOut('slow');
                        swal("Error!", "Se presento un error al generar el informe, por favor intenta nuevamente, si el error persiste cominicate con el administrador!", "error")
                    });

            })

        })
    </script>
@endpush
