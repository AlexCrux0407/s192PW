@extends('layouts.plantilla1')
    @section('titulo','Formulario')
    @section('contenido' )
    <x-Card encabezado="Componente" titulo="Dinámico" textoboton="Enviar">
        Soy el texto del primer componente
    </x-Card>
    <x-Card encabezado="Componente2" titulo="Dinámico2" textoboton="Enviar2">
        Soy el texto del segundo componente 
    </x-Card>

    <x-Alert tipo="success"> Exito </x-Alert>
    <x-Alert tipo="warning"> Precaucion </x-Alert>
    <x-Alert tipo="danger"> Peligro </x-Alert>
    @endsection