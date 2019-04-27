<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Worklog extends Model
{
    protected $connection = 'oracle';
    protected $table='maximo.worklog';

    public function incidente(){
        return $this->belongsTo('App\Models\Incident','recordkey','ticketid')->withDefault();
    }
    public function creador(){
        return $this->hasOne('App\Models\Person','personid','createby');
    }

    public function tarea(){
        return $this->belongsTo('App\Models\WoActivity','recordkey','wonum')->withDefault();
    }
}
