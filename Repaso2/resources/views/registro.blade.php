@extends('layouts.Navbar')
@section('titulo','registro')
@section('contenido')
<div class="container mt-5 col-md-6">
    <div class="card font-monospace">
        <div class="card-header fs-5 text-center text-primary">
        Registro Libros
        </div>  
            <div class="card-body text-justify">
                <div class="mb-3">
                    <label for=ISBN class="form-label">ISBN:</label>
                    <input type="number" class="form-control" id="ISBN" name="ISBN" required>
                </div> 

                <div class="mb-3">
                    <label for=titulo class="form-label">Título:</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" required>
                </div> 

                <div class="mb-3">
                    <label for=autor class="form-label">Autor:</label>
                    <input type="text" class="form-control" id="autor" name="autor" required>
                </div> 

                <div class="mb-3">
                    <label for=paginas class="form-label">Páginas:</label>
                    <input type="number" class="form-control" id="paginas" name="paginas" required>
                </div> 

                <div class="mb-3">
                    <label for=año class="form-label">Año:</label>
                    <input type="date" class="form-control" id="año" name="año" required>
                </div> 

                <div class="mb-3">
                    <label for=mail class="form-label">Email de la editorial:</label>
                    <input type="mail" class="form-control" id="mail" name="mail" required>
                </div> 

                <button type='submit' class="btn btn-success btn-sm">Guardar libro</button>
        </div>
    </div>
</div>

@endsection('contenido')