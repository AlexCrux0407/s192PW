@extends('layouts.app')

@section('contenido')
<div class="container"></div>
    <div class="jumbotron mt-5">
        <h1 class="display-4">Portada práctica de repaso </h1>
        <p class="lead">Alumno: Alexis Guadarrama Cruz.</p>
        <hr class="my-4">
        <p>Grupo S192</p>
        <a class="btn btn-primary btn-lg" href="{{ route('repaso1') }}">Ir a la página principal</a>
    </div>
</div>
@endsection