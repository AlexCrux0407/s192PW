@extends('layouts.plantilla1')
@section('titulo', 'Clientes')

@section('contenido')

{{-- Inicia tarjetaCliente --}}
<div class="container mt-5 col-md-8">

    @foreach ($consultaClientes as $cliente)
        <div class="card text-justify font-monospace">
            <div class="card-header fs-5 text-primary">
                {{$cliente->nombre}}
            </div>
            <div class="card-body">
                <h5 class="fw-bold">
                    {{$cliente->correo}}
                </h5>
                <h5 class="fw-bold">
                    {{$cliente->telefono}}
                </h5>
                <p class="card-text fw-lighter"></p>
            </div>
            <div class="card-footer text-muted">
                <form action="{{ route('update', $cliente->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-warning btn-sm">
                        Actualizar
                    </button>
                </form>
                <a href="{{ route('edit', $cliente->id) }}" button type="submit"
                    class="btn btn-success btn-sm">{{__('Editar')}}</a></button>
                <form action="{{ route('delete', $cliente->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"
                        onclick="return confirm('¿Estás seguro de eliminar este cliente?')">
                        Eliminar
                    </button>
                </form>

            </div>
        </div>
    @endforeach
</div>
@session('success')
<x-Alert tipo='success'> {{session('success')}} </x-Alert>
    @endsession

{{-- Finaliza tarjetaCliente --}}
@endsection