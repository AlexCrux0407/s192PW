<?php
use App\Http\Controllers\ControladorTurista;
use Illuminate\Support\Facades\Route;

Route::get('/inicio', function () {
    return view('inicio');
})->name('inicio');

Route::get('/login', function () {
    return view('iniciosesion');
})->name('login');

Route::post('/procesar-login', [ControladorTurista::class, 'procesarLogin'])->name('procesarLogin');

Route::get('/registro', function () {
    return view('registro');
})->name('registro');

Route::post('/procesar-registro', [ControladorTurista::class, 'procesarRegistro'])->name('procesarRegistro');

Route::post('/buscar-hotel', [ControladorTurista::class, 'buscarHotel'])->name('rutabuscarHotel');
Route::post('/buscar-vuelo', [ControladorTurista::class, 'buscarVuelo'])->name('rutabuscarVuelo');
Route::post('/consultar-reserva', [ControladorTurista::class, 'consultarReserva'])->name('rutaConsultar');

Route::get('/vuelos', function () {
    return view('vuelos');
})->name('vuelos');

Route::get('/hoteles', function () {
    return view('hoteles');
})->name('hoteles');

Route::get('/reservacion', function () {
    return view('reservacion');
})->name('reservacion');

Route::post('/reservar-servicio', [ControladorTurista::class, 'reservarServicio'])->name('reservarServicio');
