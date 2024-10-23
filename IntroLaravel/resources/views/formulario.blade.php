    @extends('layouts.plantilla1')
    @section('titulo','Formulario')
    @section('contenido' )
    <!-- inicia Tarjeta con formulario -->
    <div class="container mt-5 col-md-6">
    @if(session('exito'))
    <x-Alert tipo='success'> {{session('exito')}} </x-Alert>
    @endif

    @session('exito')
    <x-Alert tipo='danger'> {{session('exito')}} </x-Alert>
    @endsession


        <div class="card font-monospace">
            <div class="card-header fs-5 text-center text-primary">
                Registro de Clientes
            </div>
            <div class="card-body text-justify">

            
                <form action="/enviarCliente" method="POST">

                    @csrf


                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" name="txtnombre">
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido:</label>
                        <input type="text" class="form-control" name="txtapellido">
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo:</label>
                        <input type="email" class="form-control" name="txtcorreo">
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono:</label>
                        <input type="number" class="form-control" name="txttelefono">
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












