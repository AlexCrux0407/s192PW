<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    @vite(["resources/js/app.js"])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
    <form action="/enviarReq" method="POST">
    @csrf   

    <h1 class="text-center text-primary mt-5 mb-4">Registro de usuarios</h1>

    <div class="container  col-md-4">

    <form>

        <div class="mb-3">
            <label  class="form-label">Correo: </label>
            <input type="mail" class="form-control" id='correo' name='correo' >
        </div>

        <div class="mb-3">
            <label class="form-label">Contraseña: </label>
            <input type="password" class="form-control" id='contraseña' name='contraseña' >
        </div>                

        <div class="mb-3">
            <label  class="form-label">Edad: </label>
            <input type="number" class="form-control"  id='Edad' name='Edad' >
        </div>



        <button type="submit" class="btn btn-danger "> Guardar Usuario</button>


</div>
@if(session('exito'))
    <script>
        Swal.fire({
            title: '¡Registro exitoso!',
            text: "{{ session('exito') }}",
            icon: 'success',
            confirmButtonText: 'Aceptar'
        });
    </script>
@endif
@if($errors->any())
    <script>
        Swal.fire({
            title: 'Errores en el formulario',
            html: `
                <ul style="text-align: left;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            `,
            icon: 'error',
        });
    </script>
@endif

</body>
</html>