<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function home(){
        return view('home');
    }
    public function registro(){
        return view('registro');
    }
}
