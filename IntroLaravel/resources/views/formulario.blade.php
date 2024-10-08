    @extends('layouts.plantilla1')
    @section('titulo','Formulario')
    @section('contenido')
    <!-- inicia Tarjeta con formulario -->
    <div class="container mt-5 col-md-6">
        <div class="card font-monospace">
            <div class="card-header fs-5 text-center text-primary">
                Registro de Clientes
            </div>
            <div class="card-body text-justify">
                <form>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido:</label>
                        <input type="text" class="form-control" id="apellido">
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo:</label>
                        <input type="email" class="form-control" id="correo">
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono:</label>
                        <input type="number" class="form-control" id="telefono">
                    </div>
                    <button type="submit" class="btn btn-success btn-sm">Guardar Cliente</button>
                </form>
            </div>
            <div class="card-footer text-muted">
                <!-- Finaliza Tarjeta con formulario -->

            </div>
        </div>
    </div> 
    @endsection












