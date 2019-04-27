<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassStructure extends Model
{
    protected $connection = 'oracle';
    protected $table="maximo.classstructure";
}
