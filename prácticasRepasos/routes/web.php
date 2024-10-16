<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorInicio;
use App\Http\Controllers\ControladorRepaso;

Route::get('/', [ControladorInicio::class, 'index'])->name('home');

Route::get('/repaso1', [ControladorRepaso::class, 'index'])->name('repaso1');

Route::post('/convertidor', [ControladorRepaso::class, 'convertidor'])->name('convertidor');


