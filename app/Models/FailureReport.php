<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FailureReport extends Model
{
    protected $connection = 'oracle';
    protected $table="maximo.failurereport";

    public function incidente(){
        return $this->belongsTo('App\Models\Incident','ticketid','ticketid')->withDefault();
    }

    public function falla(){
        return $this->belongsTo('App\Models\FailureCode','failurecode','failurecode')->withDefault();
    }
}
