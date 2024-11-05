<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorReq;

Route::get('/', function () {
    return view('formUsuarios');
});

Route::post('/enviarReq',[controladorReq::class, 'procesarReq'])->name('rutaEnviar');
