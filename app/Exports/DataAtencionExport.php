<?php

namespace App\Exports;

use App\Models\Incident;
use App\Models\WorkOrder;
use Maatwebsite\Excel\Concerns\FromCollection;

class DataAtencionExport implements FromCollection,ShouldQueue,Responsable, WithHeadings,WithMapping,WithChunkReading,ShouldAutoSize
{
    use Exportable;
    public function __construct($date)
    {
        $this->date = $date;
    }

    public function collection()
    {
        $fecha = explode('/',$this->date);
        $from = $fecha[0].'00:00:00';
        $to = $fecha[1].' 23:59:59';

        return WorkOrder::whereHas('incidente', function($q)use($from,$to){
            $q->whereBetween('creationdate', [$from, $to])->where('ticketid','like','INC%');
        })->get();
    }
    public function map($row): array
    {
        return [

            $row->incidente['ticketid'],
            $row->incidente['description'],
            $row->incidente['ruta_clasificacion']['description'],
            $row->incidente['status'],
            $row->incidente['creationdate'],
            $row->incidente['actualfinish'],
            $row->incidente['assignedownergroup'],
            $row->incidente['grupo_propietario']['description'],
            $row->incidente['creado_por']['displayname'],
            $row->wonum,
            $row->reportdate,
            $row->statusdate,
            $row->status,
            $row->ot_wfm,
            $row->ownergroup,

        ];
    }

}
