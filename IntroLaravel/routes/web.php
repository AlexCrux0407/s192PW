<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\clienteController;


//controlador vistas

Route::get('/',[controladorVistas::class, 'home'])->name('rutainicio');
Route::view('/componentes','componentes')->name(name: 'rutacomponentes');
Route::post('/enviarCliente',[controladorVistas::class, 'procesarcliente'])->name('rutaEnviar');



//controlador vistas
Route::get('/cliente/create', [clienteController::class, 'create'])->name('rutaformulario');
Route::post('/cliente', [clienteController::class,'store'])->name('enviaCliente');
Route::get('/clientes', [clienteController::class, 'index'])->name('rutaclientes');



//ruta de tipo GET
/*Route::get('/', function () {
    return view('welcome');
});*/

/* //ruta de tipo view
Route::view('/',view: 'inicio')->name('rutainicio');
Route::view('/form','formulario')->name(name: 'rutaformulario');
Route::view('/clientes','clientes')->name(name: 'rutaclientes');
 */


