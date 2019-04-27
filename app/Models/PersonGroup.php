<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonGroup extends Model
{
    protected $connection = 'oracle';
    protected $table='maximo.persongroup';
}
