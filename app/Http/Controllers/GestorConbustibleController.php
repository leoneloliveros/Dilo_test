<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestorConbustibleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        session(['module' => 'gestor_combustible']);
    }
    public function estacionesBase(){
        return view('gestor_combustible.estaciones_base');
    }
}
