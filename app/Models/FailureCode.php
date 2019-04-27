<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FailureCode extends Model
{
    protected $connection = 'oracle';
    protected $table="maximo.failurecode";
}
