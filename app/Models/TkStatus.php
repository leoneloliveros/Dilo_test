<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TkStatus extends Model
{
    protected $connection = 'oracle';
    protected $table="maximo.tkstatus";


    public function incidente(){
        return $this->belongsTo('App\Models\Incident', 'ticketid', 'ticketid')->withDefault();
    }

    public function propietario(){
        return $this->belongsTo('App\Models\Person', 'owner', 'personid')->withDefault();
    }
    public function modificadopor(){
        return $this->belongsTo('App\Models\Person', 'changeby', 'personid')->withDefault();
    }
    public function nota(){
        return $this->belongsTo('App\Models\Worklog', 'owner', 'createby')->withDefault();
    }

}
