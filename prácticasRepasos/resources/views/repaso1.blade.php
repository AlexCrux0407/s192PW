@extends('layouts.app')

@section('contenido')
<div class="container mt-5">
    <h2> Convertidor de unidades </h2>
    <form action="{{route('convertir')}}", method="POST">
        @csrf
        <div class="form-group">
            <label for="unidad">Unidad a convertir:</label>
            <select class="form-control" id="unidad" name="unidad">
                <option value="MB">MB</option>
                <option value="GB">GB</option>
                <option value="TB">TB</option>
            </select>
        </div>
        <div class="form-group">
            <label for="valor">Valor en unidades anteriores:</label>
            <input type="number" class="form-control" id="valor" name="valor" placeholder="Ingrese un valor">
        </div>
        <button type="submit" class="btn btn-primary">Convertir</button>
    </form

</div>