<?php

namespace App\Http\Controllers;

use App\Exports\AlarmasAutomatismoExport;
use App\Exports\CausalesCierreExport;
use App\Exports\ClAlarmasExport;
use App\Exports\ExcelTmpExport;
use App\Exports\IncidentesTareasExport;
use App\Exports\IncidentExport;
use App\Exports\InformacionGeneralExport;
use App\Exports\InformeDetalladoExport;
use App\Exports\TareaIncidenteNotasExport;
use App\Exports\TareaInFoExport;
use App\Exports\WorklogExport;
use App\Imports\ExcelTmpImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\VarDumper\Cloner\Data;

class ExportController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        session()->forget('module');
        session()->put('module', 'export');
    }
    public function index(){
        session()->put('module', 'export');
        return view('export.index');
    }

    public function download(Request $request){
        $fecha =time();

        switch ($request->type) {
            case 'workinfo':
                $fileName = 'WorkInfo_'.$fecha.'.xlsx';
                (new WorklogExport($request->fecha))->store($fileName,'public');
                break;
            case 'alarm':
                $fileName = 'Alarmas-'.$fecha.'.xlsx';
                (new ClAlarmasExport($request->fecha))->store($fileName,'public');
                break;
            case 'alarm_automatismo':
                $fileName = 'Alarmas Automatismo-'.$fecha.'.xlsx';
                (new AlarmasAutomatismoExport($request->fecha))->store($fileName,'public');
                break;
            case 'general':
                $fileName = 'Informacion General-'.$fecha.'.xlsx';
                (new InformacionGeneralExport($request->fecha))->store($fileName,'public');
                break;
            case 'incident_tareas':
                $fileName = 'Tareas_'.$fecha.'.xlsx';
                (new TareaIncidenteNotasExport($request->fecha))->store($fileName,'public');
                break;
            case 'detallado':
                $fileName = 'Historico Detallado-'.$fecha.'.xlsx';
                (new InformeDetalladoExport($request->fecha))->store($fileName,'public');
                break;
            case 'causales_cierre':
                $fileName = 'Causales de Cierre-'.$fecha.'.xlsx';
                (new CausalesCierreExport($request->fecha))->store($fileName,'public');
                break;
            case 'tareas_fo_performance':
                $fileName = 'Tareas FO-PERFORMANCE-'.$fecha.'.xlsx';
                (new TareaInFoExport($request->fecha))->store($fileName,'public');
                break;
            case 'data_atencion':
                $fileName = 'Data Atencion-'.$fecha.'.xlsx';
                (new Data($request->fecha))->store($fileName,'public');
                break;
            default:
                $fileName = '';
                break;
        }

        if($fileName!='') {
            return Storage::url($fileName);
        }
    }

    public function dividirExcel(){
        $name= 'PLANTILLA GENERAL EXCLUSIONES MAYO DE 2018 ANALISIS.xlsx';
        $file = Storage::url('tmp.xlsx');

        if( file_exists(public_path($file))) {
            Excel::import(new ExcelTmpImport(), 'tmp.xlsx','public');
        }
    }
}
