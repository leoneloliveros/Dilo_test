<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClAlarma extends Model
{

    protected $connection = 'oracle';
    protected $table="maximo.cl_alarmas";

    public function incidente(){
        return $this->belongsTo('App\Models\Incident','r_ticketnro','ticketid')->withDefault();
    }
}
