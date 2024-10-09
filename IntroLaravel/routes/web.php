<?php

use Illuminate\Support\Facades\Route;
//ruta de tipo GET
/*Route::get('/', function () {
    return view('welcome');
});*/

//ruta de tipo view
Route::view('/',view: 'inicio')->name('rutainicio');
Route::view('/form','formulario')->name(name: 'rutaformulario');
Route::view('/clientes','clientes')->name(name: 'rutaclientes');
Route::view('/componentes','componentes')->name(name: 'rutacomponentes');