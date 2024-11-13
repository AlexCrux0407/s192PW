<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

Route::get('/',[controladorVistas::class, 'home'])->name('rutainicio');
Route::get('/form', [controladorVistas::class, 'formulario'])->name('rutaformulario');
Route::get('/clientes', [controladorVistas::class, 'consulta'])->name('rutaclientes');
Route::view('/componentes','componentes')->name(name: 'rutacomponentes');
Route::post('/enviarCliente',[controladorVistas::class, 'procesarcliente'])->name('rutaEnviar');


//ruta de tipo GET
/*Route::get('/', function () {
    return view('welcome');
});*/

/* //ruta de tipo view
Route::view('/',view: 'inicio')->name('rutainicio');
Route::view('/form','formulario')->name(name: 'rutaformulario');
Route::view('/clientes','clientes')->name(name: 'rutaclientes');
 */


