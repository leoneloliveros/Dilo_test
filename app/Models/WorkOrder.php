<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkOrder extends Model
{
    protected $connection = 'oracle';
    protected $table='maximo.workorder';

    public function incidente(){
        return $this->belongsTo('App\Models\Incident','ORIGRECORDID','ticketid')->withDefault();
    }

    public function grupo_propietario(){
        return $this->belongsTo('App\Models\PersonGroup','assignedownergroup','persongroup')->withDefault();
    }
}
