<?php
use App\Http\Controllers\ControladorTurista;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

//Rutas para el formulario de inicio de sesion
Route::get('/login', [AuthController::class, 'login'])->name('login'); // Mostrar formulario de inicio de sesión
Route::post('/login', [AuthController::class, 'authenticate'])->name('procesarLogin');
//Rutas para el formulario de registro
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'processRegister'])->name('processRegister');

Route::get('/registro', [AuthController::class, 'register'])->name('registro'); // Mostrar formulario de inicio de sesión


Route::get('/admin/dashboard', function () {return view('admin.dashboard');})->name('admin.dashboard')->middleware('auth');

// Ruta para la página principal
Route::get('/inicio', function () {return view('inicio');})->name('inicio');

// Otras rutas

Route::post('/procesar-registro', [ControladorTurista::class, 'procesarRegistro'])->name('procesarRegistro');

Route::post('/buscar-hotel', [ControladorTurista::class, 'buscarHotel'])->name('rutabuscarHotel');
Route::post('/buscar-vuelo', [ControladorTurista::class, 'buscarVuelo'])->name('rutabuscarVuelo');
Route::post('/consultar-reserva', [ControladorTurista::class, 'consultarReserva'])->name('rutaConsultar');

Route::get('/vuelos', function () {return view('vuelos');})->name('vuelos');

Route::get('/hoteles', function () {return view('hoteles');})->name('hoteles');

Route::get('/reservacion', function () {return view('reservacion');})->name('reservacion');

Route::post('/reservar-servicio', [ControladorTurista::class, 'reservarServicio'])->name('reservarServicio');
