<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MesaCalidadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        session()->forget('module');
    }
    public function index(){
        session()->put('module', 'mesa_calidad');
        return view('mesa_calidad.tiempos');
    }
    public function tiempos(){
        return view('mesa_calidad.tiempos');
    }
    public function resumen(){
        return view('mesa_calidad.resumen');
    }
    public function reasignaciones(){
        return view('mesa_calidad.reasignaciones');
    }
    public function rangos(){
        return view('mesa_calidad.rangos');
    }
    public function export(){
        return view('mesa_calidad.exportables');
    }
    public function users(){
        return view('mesa_calidad.users');
    }



}
