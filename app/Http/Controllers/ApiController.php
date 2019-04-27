<?php

namespace App\Http\Controllers;

use App\Models\Incident;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function inciedntes()
    {
        $incidentes = Incident::where('creationdate', '>=','2019-01-15 00:00:00')->where('ticketid','like','INC%')->paginate(1000);
        return response()->json($incidentes);
    }
}
