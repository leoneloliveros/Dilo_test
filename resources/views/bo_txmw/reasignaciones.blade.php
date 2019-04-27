@extends('layouts.app')

@section('content')
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">Reasignaciones</h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item m-nav__item--home">
                        <a href="{{route('home')}}" class="m-nav__link m-nav__link--icon">
                            <i class="m-nav__link-icon la la-home"></i>
                        </a>
                    </li>
                    <li class="m-nav__separator">-</li>
                    <li class="m-nav__item">
                        <a href="#" class="m-nav__link">
                            <span class="m-nav__link-text">Mesa Calidad</span>
                        </a>
                    </li>
                    <li class="m-nav__separator">-</li>
                    <li class="m-nav__item">
                        <a href="#" class="m-nav__link">
                            <span class="m-nav__link-text">Resasignaciones</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="m-content">

        <div class="m-portlet">
            <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed">
                <div class="m-portlet__body">
                    <div class="form-group m-form__group row">
                        <div class="col-lg-2">
                            <label>Año:</label>
                            <select class="form-control m-input m-input--air m-bootstrap-select m_selectpicker"  multiple title="Filtro Años...">
                                <option>2019</option>
                            </select>
                        </div>
                        <div class="col-lg-2">
                            <label class="">Mes:</label>
                            <select class="form-control m-input m-input--air m-bootstrap-select m_selectpicker"  multiple title="Filtro Meses...">
                                <option>Enero</option>
                            </select>
                        </div>

                        <div class="col-lg-2">
                            <label>Grupo:</label>
                            <select class="form-control m-input m-input--air m-bootstrap-select m_selectpicker"  multiple title="Filtro Grupos...">
                                <option>FO-PERFORMANCE</option>
                                <option>AMDOCS</option>
                                <option>AUTOMATISMO PERFORMANCE</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <label>Estado:</label>
                            <select class="form-control m-input m-input--air m-bootstrap-select m_selectpicker"  multiple title="Filtro Estados...">
                                <option>Cerrado</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <label>Tipo:</label>
                            <select class="form-control m-input m-input--air m-bootstrap-select m_selectpicker"  multiple title="Filtro Tipos...">
                                <option>Incidente</option>
                                <option>Notificacion</option>
                                <option>Performance</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                    <div class="m-form__actions m-form__actions--solid">
                        <div class="row">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-8 m--align-right">
                                <button type="submit" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air">
                                    <span>
										<i class="la la-check"></i>
										<span>Aplicar Filtros</span>
									</span>
                                </button>
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
        $(document).ready(function () {
            $(".m_selectpicker").selectpicker()
        })

    </script>
@endpush
