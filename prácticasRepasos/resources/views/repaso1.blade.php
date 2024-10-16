@extends('layouts.app')

@section('contenido')
<div class="container mt-5">
    <h2> Convertidor de unidades </h2>
    <form action="{{ route('convertidor') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="cantidad">Cantidad a convertir:</label>
            <input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="Ingresa la cantidad" required>
        </div>
        <div class="form-group">
            <label for="unidad">Unidad a convertir:</label>
            <select class="form-control" id="unidad" name="unidad">
                <option value="MB">MB</option>
                <option value="GB">GB</option>
                <option value="TB">TB</option>
            </select>
        </div>
        <div class="form-group">
            <label for="convertida">Convertir a:</label>
            <select class="form-control" id="convertida" name="convertida" required>
                <option value="MB">MB</option>
                <option value="GB">GB</option>
                <option value="TB">TB</option>
            </select>        
        </div>
        <button type='submit' class='btn btn-primary'>Convertir</button>
    </form>

    @if($result !== null && $convertida !== null)
    <div class="alert alert-success mt-4">
        El resultado es: {{ $result }}
    </div>
    @endif
</div>

@endsection