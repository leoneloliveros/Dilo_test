<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ci extends Model
{
    protected $connection = 'oracle';
    protected $table="maximo.ci";
}
