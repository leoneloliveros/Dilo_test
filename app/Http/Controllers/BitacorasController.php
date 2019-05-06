<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BitacorasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        session(['module' => 'bitacoras']);
    }
    public function formulario(){
        return view('bitacoras.formulario_bitacoras');
    }
}
