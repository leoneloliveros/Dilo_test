<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WoActivity extends Model
{

    //Modelo De WOACTIVITY => Almacena las tareas de un incidente
    protected $connection = 'oracle';
    protected $table="maximo.woactivity";

    public function incidente(){
        return $this->belongsTo('App\Models\Incident','origrecordid','ticketid')->withDefault();
    }

    public function articulo_configuracion(){
        return $this->hasOne('App\Models\Ci','ciid','cinum');
    }

    public function grupo_propietario(){
        return $this->belongsTo('App\Models\PersonGroup','personid','ownergroup')->withDefault();
    }

    public function propietario(){
        return $this->hasOne('App\Models\Person','personid','owner')->withDefault();
    }

    public function notas(){
        return $this->hasMany('App\Models\Worklog','recordkey','wonum');
    }

    public function scopeCreacion($query,$f,$t)
    {
        if(($f!='') and ($t!='')){
            $from = $f. ' 00:00:00';
            $to = $t. ' 23:59:59';
        }else{
            $from =  date('Y-m'). '-01 00:00:00';
            $to = date('Y-m-d'). ' 23:59:59';
        }
        $query->whereBetween('REPORTDATE', [$from, $to]);
    }
    public function scopeEstado($query,$estado)
    {
        if($estado==1) {
            $query->whereNotIn('status', array('CLOSE', 'CAN', 'CANCLO', 'CANCLOEJ'));
        }else if($estado==0){
            $query->whereIn('status',array('CLOSE','CAN','CANCLO','CANCLOEJ'));
        }
    }

    public function scopePrioridadIncidente($query,$prioridad){

        if($prioridad!='') {
            $valor ='';
            if($prioridad=='Alta'){
                $valor=1;
            }else if($prioridad=='Media'){
                $valor=2;
            }else if($prioridad=='Baja'){
                $valor=3;
            }
            $query->whereHas('incidente', function ($q) use ($valor) {
                $q->where('internalpriority', $valor);
            });
        }
    }
    public function scopeGruposAsignados($query,$grupos){
        if(!empty($grupos)){
            $query->whereIn('assignedownergroup',$grupos);
        }
    }
    public function getTiempoTranscurridoAttribute(){
        if($this->actfinish!=''){

        }else{

        }
    }
}
