<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;



Route::get('/home',[controladorVistas::class,'home'])->name('rutahome');

Route::get('/registro',[controladorVistas::class,'registro'])->name('rutaregistro');

Route::post('/enviarLibro',[controladorVistas::class, 'procesarlibro'])->name('rutaEnviar');





