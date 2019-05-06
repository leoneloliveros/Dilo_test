@extends('layouts.app')

@section('content')
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">Creación de Bitacoras</h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item m-nav__item--home">
                        <a href="#" class="m-nav__link m-nav__link--icon">
                            <i class="m-nav__link-icon la la-home"></i>
                        </a>
                    </li>
                    <li class="m-nav__separator">-</li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text">Bitácoras</span>
                        </a>
                    </li>
                    <li class="m-nav__separator">-</li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text">Formulario</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="m-content">
        <form>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="tipoBitacora">Tipo de bitácora</label>
                    <select id="tipoBitacora" class="form-control">
                        <option selected>Seleccione...</option>
                        <option>Energía</option>
                        <option>Intermitencias</option>
                        <option>Plataforma</option>
                        <option>Servicios</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="fechaHoraInicioAlarma">Inicio Alarma</label>
                    <input type="text" class="form-control" id="fechaHoraInicioAlarma" placeholder="Ingrese fecha y hora">
                </div>
                <div class="form-group col-md-4">
                    <label for="fechaHoraCreacionTk">Creación TK</label>
                    <input type="text" class="form-control" id="fechaHoraCreacionTk" placeholder="Ingrese fecha y hora">
                </div>
                <div class="form-group col-md-4">
                    <label for="fechaHoraInicioActividad">Inicio Actividad</label>
                    <input type="text" class="form-control" id="fechaHoraInicioActividad" placeholder="Ingrese fecha y hora">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="fechaHoraFinActividad">Fin Actividad</label>
                    <input type="text" class="form-control" id="fechaHoraFinActividad" placeholder="Ingrese fecha y hora">
                </div>
                <div class="form-group col-md-4">
                    <label for="tiempoAtencion">Tiempo Atención</label>
                    <input type="text" class="form-control" id="tiempoAtencion" placeholder="Ingrese valor">
                </div>
                <div class="form-group col-md-4">
                    <label for="tipoActividad">Tipo de Actividad</label>
                    <input type="text" class="form-control" id="tipoActividad" placeholder="Seleccione..">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="estadoBitacora">Estado</label>
                    <input type="text" class="form-control" id="estadoBitacora" placeholder="Seleccione..">
                </div>
                <div class="form-group col-md-4">
                    <label for="nTkIncidente">Tk incidente</label>
                    <input type="text" class="form-control" id="nTkIncidente" placeholder="Ingrese número">
                </div>
                <div class="form-group col-md-4">
                    <label for="descripcionBitacora">Descripción</label>
                    <input type="textArea" class="form-control" id="descripcionBitacora" placeholder="">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="ingenieroBitacora">Ingeniero</label>
                    <input type="text" class="form-control" id="ingenieroBitacora" placeholder="Seleccione..">
                </div>
                <div class="form-group col-md-4">
                    <label for="cedulaBitacora">Cédula</label>
                    <input type="text" class="form-control" id="cedulaBitacora" placeholder="Ingrese número">
                </div>
                <div class="form-group col-md-4">
                    <label for="turnoBitacora">Turno</label>
                    <input type="textArea" class="form-control" id="turnoBitacora" placeholder="">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="OtTarea">OT / Tarea</label>
                    <input type="text" class="form-control" id="OtTarea" placeholder="Seleccione..">
                </div>
                <div class="form-group col-md-4">
                    <label for="areaAsignacion">Área asignación</label>
                    <input type="text" class="form-control" id="areaAsignacion" placeholder="Ingrese número">
                </div>
                <div class="form-group col-md-4">
                    <label for="responsableBitacora">Responsable</label>
                    <input type="textArea" class="form-control" id="turnoBitacora" placeholder="">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="casoDeUso">Caso de Uso</label>
                    <input type="text" class="form-control" id="casoDeUso" placeholder="Seleccione..">
                </div>
                <div class="form-group col-md-4">
                    <label for="prioridadBitacora">Prioridad</label>
                    <input type="text" class="form-control" id="prioridadBitacora" placeholder="Ingrese número">
                </div>
                <div class="form-group col-md-4">
                    <label for="tiempoDeDeteccion">Tiempo de detección</label>
                    <input type="textArea" class="form-control" id="tiempoDeDeteccion" placeholder="">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="tipoDeIncidente">Tipo de incidente</label>
                    <input type="text" class="form-control" id="tipoDeIncidente" placeholder="Seleccione..">
                </div>
                <div class="form-group col-md-4">
                    <label for="estacionesAfectadas">Estaciones Afectadas</label>
                    <input type="text" class="form-control" id="estacionesAfectadas" placeholder="Ingrese cantidad">
                </div>
                <div class="form-group col-md-4">
                    <label for="turnoBitacora"></label>
                    <input type="textArea" class="form-control" id="turnoBitacora" placeholder="">
                </div>
            </div>
            <div id="validateSelection d-flex">
                <div id="unlessPlataforma" class="col-md-4">
                    <div class="form-group">
                        <label for="inputAddress">Tiempo de detección</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="ingrese valor..">
                    </div>
                </div>
                <div id="unlessIntermitencias" class="col-md-4">
                    <div class="form-group">
                        <label for="inputAddress">Tipo de incidente</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="ingrese valor..">
                    </div>
                </div>
                <div id="ifEnergia" class="col-md-4" style="display: none;">
                    <div class="form-group">
                        <label for="tipoDeFalla">Tipo de falla</label>
                        <input type="text" class="form-control" id="tipoDeFalla" placeholder="ingrese valor..">
                    </div>
                </div>
                <div id="ifIntermitencias" class="col-md-4">
                    <div class="form-group">
                        <label for="inputAddress">TK Padre</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="ingrese valor..">
                    </div>
                </div>
                <div id="ifServicios" class="col-md-4">
                    <div class="form-group">
                        <label for="inputAddress">Valida Ruta Tx</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="ingrese valor..">
                    </div>
                </div>
                <div id="ifPlataforma" class="col-md-4">
                    <div class="form-group">
                        <label for="inputAddress">Reporte con proveedores</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="ingrese número..">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Servicios Corporativos</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="ingrese cantidad..">
                    </div>
                </div>
                <div id="ifIntermitencias_servicios" class="col-md-4">
                    <div class="form-group">
                        <label for="inputAddress">Saltos validados</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="ingrese nuúmero..">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Subir Bitácora</button>
        </form>



    </div>

@endsection
@push('scripts')

@endpush


<script>
    $('#tipoBitacora').on('change', function() {
        switch ($('#tipoBitacora option:selected').text()) {
            case "Energía":
                $('#isEnergia').attr("style", "display: block;");
                break;
            case "Intermitencias":

                break;
            case "Plataforma":

                break;
            case "Servicios":

                break;
            default:
        }
    });
    </script>