 <div class="row">
    <div class="col-sm-12">
        <table class="table table-striped- table-bordered table-hover  dataTable no-footer" id="tabla_tareas">
            <thead>
                <tr>
                    <td>Incidente</td>
                    <td>Tarea</td>
                    <td>Estado</td>
                    <td>Prioridad</td>
                    <td>Grupo Asignado</td>
                    <td>Resumen</td>
                    <td>Fecha Asignacion</td>
                </tr>
            </thead>
            <tbody>
            @foreach($tareas as $tarea)
                <tr>
                    <td>{{$tarea->incidente->ticketid}}</td>
                    <td>{{$tarea->wogroup}}</td>
                    <td>{{$tarea->status}}</td>
                    <td>{{ urgencia($tarea->incidente->internalpriority) }}</td>
                    <td>{{$tarea->assignedownergroup}}</td>
                    <td>{{$tarea->description}}</td>
                    <td>{{$tarea->reportdate}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
 </div>

