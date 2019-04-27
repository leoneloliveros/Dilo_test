<?php

namespace App\Http\Controllers;

use App\Models\BoTxGrupo;
use App\Models\BoTxPerson;
use App\Models\WoActivity;
use Illuminate\Http\Request;

class BoTxWmController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        session(['module' => 'bo_tx']);

    }

    public function index(){
        return view('bo_txmw.index');
    }
    public function tareasAbiertas(){
        return view('bo_txmw.index');
    }
    public function sitiosReincidentes(){
        return view('bo_txmw.index');
    }
    public function sitiosExcluidos(){
        return view('bo_txmw.index');
    }
    public function usuariosGrupos(){
        return view('bo_txmw.index');
    }
    public function export(){
        return view('bo_txmw.index');
    }

    public function getDashboardInfo(Request $request){
        $grupos  = BoTxGrupo::where('estado',1)->orderBy('nombre')->get()->pluck('nombre');
        $tareas = WoActivity::gruposAsignados($grupos)->creacion($request->inicio,$request->fin)->get();

        $total=$tareas->count();
        $cerradas =$tareas->whereIn('status',array('CLOSE','CAN','CANCLO','CANCLOEJ'))->count();
        $infoGrupos=array();
        foreach ($grupos as $grupo){
            $tmp = $tareas->where('assignedownergroup',$grupo);


            $infoGrupos['data'][$grupo]=array(
                'cerrados'=>$tmp->whereIn('status',array('CLOSE','CAN','CANCLO','CANCLOEJ'))->count(),
                'abiertos'=>$tmp->whereNotIn('status',array('CLOSE','CAN','CANCLO','CANCLOEJ'))->count(),
            );


            $tmpOpen = $tmp->whereNotIn('status',array('CLOSE','CAN','CANCLO','CANCLOEJ'));
            $baja = 0;
            $media = 0;
            $alta = 0;

            foreach ($tmpOpen as $item){
                if($item->incidente->internalpriority==1){
                    $alta = $alta+1;
                }else if($item->incidente->internalpriority==2){
                    $media=$media+1;
                }else if($item->incidente->internalpriority==3){
                    $baja = $baja+1;
                }
            }
            $infoGrupos['items'][$grupo]=$tmp;

            $infoGrupos['prioridad'][$grupo]=array(
                'alta'=>$alta,
                'media'=>$media,
                'baja'=>$baja,
            );


        }
       $data= array(
           'total'=>$total,
           'cerradas'=>$cerradas,
           'abiertas'=>$total - $cerradas,
           'porc_cerradas'=>number_format(($cerradas/$total)*100),
           'porc_abiertas'=>number_format((($total - $cerradas)/$total)*100),
           'data_grupos'=>number_format((($total - $cerradas)/$total)*100),
           'grupos'=>$grupos,
           'infoGrupos'=>$infoGrupos
       );
      return $data;
    }

    public function listarTareas(Request $request){
        $tareas = WoActivity::prioridadIncidente($request->prioridad)->estado($request->estado)->gruposAsignados(array($request->grupo))->creacion($request->inicio,$request->fin)->get();
        return view('bo_txmw.tabla_tareas',compact('tareas'));
    }

}
