<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorReq;

Route::get('/form',[controladorReq::class,'form'])->name('rutaform');

Route::post('/enviarReq',[controladorReq::class, 'procesarReq'])->name('rutaEnviar');
