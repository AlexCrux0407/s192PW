@extends('layouts.app')

@section('contenido')
<div class="container mt-5">
    <div class="jumbotron bg-light shadow-sm p-5 rounded">
        <h1 class="display-4 text-primary font-weight-bold">Portada de la práctica de repaso</h1>
        <p class="lead text-secondary">Alumno: <span class="text-dark">Alexis Guadarrama Cruz</span></p>
        <hr class="my-4">
        <p class="text-muted">Grupo: <strong>S192</strong></p>
        <p class="text-muted">En este sitio puedes repasar los conceptos que hemos aprendido en clase y acceder al convertidor de unidades.</p>
        <a class="btn btn-primary btn-lg mt-3" href="{{ route('repaso1') }}" role="button">
            <i class="fas fa-calculator"></i> Ir a la página de conversión
        </a>
    </div>
</div>
@endsection
