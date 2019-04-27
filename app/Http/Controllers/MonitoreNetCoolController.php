<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonitoreNetCoolController extends Controller
{
    public function index(){
        return view('monitoreo_netcool.index');

    }
}
