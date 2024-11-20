<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\clienteController;


//controlador vistas

Route::get('/',[controladorVistas::class, 'home'])->name('rutainicio');
Route::view('/componentes','componentes')->name(name: 'rutacomponentes');
Route::post('/enviarCliente',[controladorVistas::class, 'procesarcliente'])->name('rutaEnviar');



//controlador cliente
Route::get('/cliente/create', [clienteController::class, 'create'])->name('rutaformulario');
Route::post('/cliente', [clienteController::class,'store'])->name('enviaCliente');
Route::get('/clientes', [clienteController::class, 'index'])->name('rutaclientes');


Route::get('/clientes{id}/edit', [clienteController::class,'edit'])->name('edit');
Route::put('/clientes{id}', [clienteController::class,'update'])->name('update');
Route::delete('/clientes{id}', [clienteController::class,'destroy'])->name('delete');


//ruta de tipo GET
/*Route::get('/', function () {
    return view('welcome');
});*/

/* //ruta de tipo view
Route::view('/',view: 'inicio')->name('rutainicio');
Route::view('/form','formulario')->name(name: 'rutaformulario');
Route::view('/clientes','clientes')->name(name: 'rutaclientes');
 */


