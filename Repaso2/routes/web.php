<?php

use Illuminate\Support\Facades\Route;
use App\Http\controladorVistas;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[controladorVistas::class],'Home')->name('rutahome');
Route::get('/registro','registro');
Route::get('/registro',[controladorVistas::class],'registro')->name('rutaregistro');
