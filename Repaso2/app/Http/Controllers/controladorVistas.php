<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validarLibros;

class controladorVistas extends Controller
{
    public function home(){
        return view('home');
    }
    public function registro(){
        return view('registro');
    }
    public function procesarlibro(validarLibros $peticionValidada)
    {
        $libro = $peticionValidada->input('titulo');
        session()->flash('exito', 'Se guardó el libro: ' . $libro);
        return to_route('rutaregistro');
    }
    
}
