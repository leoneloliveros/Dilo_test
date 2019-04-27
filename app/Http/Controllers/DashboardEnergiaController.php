<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardEnergiaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        session(['module' => 'dashboard_energia']);
    }

    public function index(){
        return view('dashboard_energia.index');
    }
}
