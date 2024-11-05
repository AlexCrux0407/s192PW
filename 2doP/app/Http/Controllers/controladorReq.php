<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validarReq;

class controladorReq extends Controller
{
    public function procesarReq(validarReq $peticionValidada)
{
    $correo = $peticionValidada->input('correo');
    session()->flash('exito', 'Se valido el correo: ' . $correo);
    return to_route('formUsuarios');
}
}