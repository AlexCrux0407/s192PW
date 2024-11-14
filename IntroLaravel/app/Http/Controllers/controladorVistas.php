<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorClientes;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function home(){
        return view('inicio');
    }

    public function procesarcliente(validadorClientes $peticionValidada){




        //return 'La información del cliente llegó al controlador';
       // return redirect()->route('rutaclientes');
       // return back();
       $usuario=$peticionValidada->input('txtnombre');
       session()->flash('exito','se guardo el usuario  '.$usuario);
       return to_route('rutaformulario');




    }
}

