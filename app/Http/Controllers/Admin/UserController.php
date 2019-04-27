<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SolicituAccesoRequest;
use App\Models\Solicitud;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function solicitudAcceso(SolicituAccesoRequest $request){
        session(['module' => 'admin']);
        $solicitud = new Solicitud();

    }
}
