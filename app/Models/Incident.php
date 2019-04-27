<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    protected $connection = 'oracle';
    protected $table="maximo.incident";

    public function tareas(){
        return $this->hasMany('App\Models\WoActivity','origrecordid','ticketid');
    }
    public function notas(){
        return $this->hasMany('App\Models\Worklog','recordkey','ticketid');
    }

    public function grupo_propietario(){
        return $this->belongsTo('App\Models\PersonGroup','assignedownergroup','persongroup')->withDefault();
    }
    public function creado_por(){
        return $this->hasOne('App\Models\Person','personid','createdby')->withDefault();
    }

    public function articulo_cf(){
        return $this->hasOne('App\Models\Ci','cinum','cinum')->withDefault();
    }

    public function elementos(){
        return $this->hasMany('App\Models\Ci','cinum','cinum')->withDefault();
    }

    public function ruta_clasificacion(){
        return $this->hasOne('App\Models\ClassStructure','classstructureid','classstructureid')->withDefault();
    }
}
