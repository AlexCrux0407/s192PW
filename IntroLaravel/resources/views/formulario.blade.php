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

    @session('exito')
    <script>
        Swal.fire({
        title: "Respuesta del servidor",
        text: "{{$value}}",
        icon: "success"
        });    
        </script>
    @endsession


        <div class="card font-monospace">
            <div class="card-header fs-5 text-center text-primary">
                Registro de Clientes
            </div>
            <div class="card-body text-justify">

            
                <form action="/enviarCliente" method="POST">

                    @csrf


                    <div class="mb-3">
                        <label for="nombre" class="form-label required">Nombre:</label>
                        <input type="text" class="form-control" name="txtnombre" value="{{old('txtnombre')}}">
                        <small class='fst-italic text-danger'>{{$errors->first('txtnombre')}}</small>
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label required">Apellido:</label>
                        <input type="text" class="form-control" name="txtapellido" value="{{old('txtapellido')}}">
                        <small class='fst-italic text-danger'>{{$errors->first('txtapellido')}}</small>

                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label required">Correo:</label>
                        <input type="text" class="form-control" name="txtcorreo" value="{{old('txtcorreo')}}">
                        <small class="fst-italic text-danger">{{$errors->first('txtcorreo')}}</small>

                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label" required>Teléfono:</label>
                        <input type="text" class="form-control" name="txttelefono" value="{{old('txttelefono')}}">
                        <small class='fst-italic text-danger'>{{$errors->first('txttelefono')}}</small>

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












