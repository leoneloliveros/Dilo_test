@extends('layouts.app')

@section('content')
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">Dashboard</h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item m-nav__item--home">
                        <a href="{{route('home')}}" class="m-nav__link m-nav__link--icon">
                            <i class="m-nav__link-icon la la-home"></i>
                        </a>
                    </li>
                    <li class="m-nav__separator">-</li>
                    <li class="m-nav__item">
                        <a href="#" class="m-nav__link">
                            <span class="m-nav__link-text">Monitor NetCool</span>
                        </a>
                    </li>
                    <li class="m-nav__separator">-</li>
                    <li class="m-nav__item">
                        <a href="#" class="m-nav__link">
                            <span class="m-nav__link-text">Dashboard</span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <div class="m-content">

        <div class="m-portlet m-portlet--tabs">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <a href="javascript:;" data-toggle="modal" data-target="#modal-import" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air">
                            <span>
                                <i class="fa flaticon-upload"></i>
                                <span>Importar Registros</span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <ul class="nav nav-tabs m-tabs-line m-tabs-line--success m-tabs-line--2x" role="tablist">
                        <li class="nav-item m-tabs__item">
                            <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_portlet_base_demo_1_1_tab_content" role="tab">
                                <i class="la flaticon-list-3"></i> Dashboard Tareas
                            </a>
                        </li>
                        <li class="nav-item m-tabs__item">
                            <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_portlet_base_demo_1_2_tab_content" role="tab">
                                <i class="la flaticon-stopwatch"></i> Dashboard Tiempos de Ejecucion
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="m-portlet__body">
                <div class="tab-content">
                    <div class="tab-pane active" id="m_portlet_base_demo_1_1_tab_content" role="tabpanel">
                        <div class="m-alert m-alert--icon m-alert--icon-solid m-alert--outline alert alert-info " role="alert">
                            <div class="m-alert__icon">
                                <i class="flaticon-exclamation-1"></i>
                                <span></span>
                            </div>
                            <div class="m-alert__text">
                                Información para filtro! <strong> Desde:</strong> <span></span> <strong>Hasta: </strong>   <span></span>
                            </div>
                        </div>

                        <div id="dash_tareas" class="m-portlet ">
                            <div class="m-portlet__body  m-portlet__body--no-padding">
                                <div class="row m-row--no-padding m-row--col-separator-xl">
                                    <div class="col-md-12 col-lg-6 col-xl-4">
                                        <!--begin::Total Profit-->
                                        <a href="javscript:;" data-type="all" data-title="Total tareas Asignadas durante el periodo" data-toggle="modal" data-target="#m_modal" class="m-widget24">
                                            <div class="m-widget24__item">
                                                <h4 class="m-widget24__title">
                                                    Tareas Asignadas
                                                </h4><br>

                                                <span class="m-widget24__stats m--font-brand" id="tas_asig">
                                    0
                                </span>
                                                <div class="m--space-10"></div>
                                                <div class="progress m-progress--sm">
                                                    <div class="progress-bar m--bg-brand" id="por_asig" role="progressbar" style="width: 0%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="m-widget24__change">

                                </span>
                                                <span class="m-widget24__number">

                                </span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-12 col-lg-6 col-xl-4">

                                        <!--begin::New Feedbacks-->
                                        <a href="javscript:;" data-type="close" data-title="Tareas cerradas durante el periodo" data-toggle="modal" data-target="#m_modal" class="m-widget24">
                                            <div class="m-widget24__item">
                                                <h4 class="m-widget24__title" >
                                                    Tareas Cerradas
                                                </h4><br>
                                                <span class="m-widget24__stats m--font-info" id="tast_cerradas">
                                    0
                                </span>
                                                <div class="m--space-10"></div>
                                                <div class="progress m-progress--sm">
                                                    <div class="progress-bar m--bg-success" id="porc_cerradas" role="progressbar" style="width: 0%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="m-widget24__change">
                                    Procentaje
                                </span>
                                                <span class="m-widget24__number" id="por_cerradas_num">

                                </span>
                                            </div>
                                        </a>

                                        <!--end::New Feedbacks-->
                                    </div>
                                    <div class="col-md-12 col-lg-6 col-xl-4">

                                        <!--begin::New Orders-->
                                        <div href="javscript:;" data-type="open" data-title="Tareas Abiertas" data-toggle="modal" data-target="#m_modal" class="m-widget24">
                                            <div class="m-widget24__item">
                                                <h4 class="m-widget24__title">
                                                    Tareas Abiertas
                                                </h4><br>

                                                <span class="m-widget24__stats m--font-warning" id="tast_abiertas">
                                    0
                                </span>
                                                <div class="m--space-10"></div>
                                                <div class="progress m-progress--sm">
                                                    <div class="progress-bar m--bg-warning" id="porc_abiertas" role="progressbar" style="width: %;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="m-widget24__change">
                                    Porcentaje
                                </span>
                                                <span class="m-widget24__number" id="por_abiertas_num">
                                   0%
                                </span>
                                            </div>
                                        </div>

                                        <!--end::New Orders-->
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div  class="col-xl-6">
                                <div class="m-portlet m-portlet--full-height ">
                                    <div class="m-portlet__body">
                                        <div id="chartTareas" style=" height: 400px; margin: 0 auto"></div>
                                    </div>
                                </div>
                            </div>
                            <div  class="col-xl-6">
                                <div class="m-portlet m-portlet--full-height ">
                                    <div class="m-portlet__body">
                                        <div id="prioridadesPorGrupo" style=" height: 400px; margin: 0 auto"></div>
                                    </div>
                                </div>
                            </div>

                        </div>



                    </div>
                    <div class="tab-pane" id="m_portlet_base_demo_1_2_tab_content" role="tabpanel">
                        <div class="row">
                            <div id="tipo_ingeniero" class="col-xl-6">
                                <div class="m-portlet m-portlet--full-height ">
                                    <div class="m-portlet__head">
                                        <div class="m-portlet__head-caption">
                                            <div class="m-portlet__head-title">
                                                <h3 class="m-portlet__head-text text-uppercase ">
                                                    Tiempo de Atencion por Ingeniero
                                                </h3>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="m-portlet__body">

                                    </div>
                                </div>
                            </div>
                            <div id="tipo_ingeniero" class="col-xl-6">
                                <div class="m-portlet m-portlet--full-height ">
                                    <div class="m-portlet__head">
                                        <div class="m-portlet__head-caption">
                                            <div class="m-portlet__head-title">
                                                <h3 class="m-portlet__head-text text-uppercase ">
                                                    Tiempo de Atencion por grupo
                                                </h3>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="m-portlet__body">

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-import" tabindex="-1" role="dialog" aria-labelledby="listarTareas" data-keyboard="false" data-backdrop="static" aria-hidden="true" style="display: none;">
        <div class="modal-dialog "  >
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Importar Registros Netcool </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body" id="modal-body">
                    <form id="form-input" class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed">
                        <div class="m-portlet__body">
                            <div class="form-group m-form__group row">
                                <div class="custom-file">
                                    <input type="file"  class="custom-file-input" id="file" required>
                                    <label class="custom-file-label" for="validatedCustomFile">Seleccionar Archivo...</label>
                                    <div class="invalid-feedback">Requiere Archivo a importar</div>
                                </div>
                            </div>
                        </div>
                        <div class="m-form__actions">
                            <div class="row">
                                <div class="col-lg-6">

                                </div>
                                <div class="col-lg-6 m--align-right">
                                    <button type="submit" class="btn btn-success">Importar </button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')


    <script src="{{asset('js/MonitoreoNetCool.js')}}"></script>
    <script>
        $(document).ready(function () {

            $("#form-input").on('submit',(function(e) {
                e.preventDefault();
                MoNetcool.imporFile('{{route('monitoreNetcool.import')}}',this)
            }));
            var urlDashboard ='{{route('monitoreNetcool.infoDashboard')}}';
            $("#m_daterangepicker_2").daterangepicker({
                buttonClasses: "m-btn btn",
                applyClass: "btn-accent",
                cancelClass: "btn-secondary",
                autoclose: true,
            }, function(a, t, n) {
                $("#m_daterangepicker_2 .form-control").val(a.format("YYYY-MM-DD") + " / " + t.format("YYYY-MM-DD"))
                BoTx.dashBoardTareas(url,a.format("YYYY-MM-DD"),t.format("YYYY-MM-DD"),urlLoadItems);
            });
        })
    </script>
@endpush
