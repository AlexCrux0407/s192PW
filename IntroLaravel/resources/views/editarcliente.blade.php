@extends('layouts.plantilla1')
@section('titulo','Actualizar Cliente')
@section('contenido')

<div class="container mt-5 col-md-6">
    <div class="card font-monospace">
        <div class="card-header fs-5 text-center text-primary">
            {{__('Actualizar Cliente')}}
        </div>
        <div class="card-body">
            <form action="{{ route('update', $cliente->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nombre" class="form-label required">{{__('Nombre')}}</label>
                    <input type="text" class="form-control" name="txtnombre" value="{{ $cliente->nombre }}">
                    <small class='fst-italic text-danger'>{{$errors->first('txtnombre')}}</small>
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label required">{{__('Apellido')}}</label>
                    <input type="text" class="form-control" name="txtapellido" value="{{ $cliente->apellido }}">
                    <small class='fst-italic text-danger'>{{$errors->first('txtapellido')}}</small>
                </div>
                <div class="mb-3">
                    <label for="correo" class="form-label required">{{__('Correo')}}</label>
                    <input type="text" class="form-control" name="txtcorreo" value="{{ $cliente->correo }}">
                    <small class="fst-italic text-danger">{{$errors->first('txtcorreo')}}</small>
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label" required>{{__('Teléfono')}}</label>
                    <input type="text" class="form-control" name="txttelefono" value="{{ $cliente->telefono }}">
                    <small class='fst-italic text-danger'>{{$errors->first('txttelefono')}}</small>
                </div>

                <button type="submit" class="btn btn-success btn-sm">{{__('Actualizar Cliente')}}</button>
            </form>
        </div>
    </div>
</div>

@endsection
