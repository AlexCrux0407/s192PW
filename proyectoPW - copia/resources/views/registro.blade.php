@extends('layouts.plantilla')

@section('contenido')
<div class="wrapper">
    <form action="{{ route('procesarRegistro') }}" method="POST">
        @csrf
        <h1>Registro</h1>
        <div class="input-box">
            <input type="text" name="nombre" placeholder="Nombre" required>
            <i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
            <input type="email" name="email" placeholder="Correo Electrónico" required>
            <i class='bx bxs-envelope'></i>
        </div>
        <div class="input-box">
            <input type="text" name="usuario" placeholder="Usuario" required>
            <i class='bx bxs-user-circle'></i>
        </div>
        <div class="input-box">
            <input type="password" name="contraseña" placeholder="Contraseña" required>
            <i class='bx bxs-lock'></i>
        </div>
        <button type="submit" class="btn">Registrarse</button>
        <div class="register-link">
            <p>¿Ya tienes una cuenta? <a href="{{ route('login') }}">Inicia sesión</a></p>
        </div>
    </form>
</div>

@if ($errors->any())
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Errores de Validación',
            html: `
                <ul style="text-align: left;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            `,
            confirmButtonText: 'Aceptar'
        });
    </script>
@endif
@endsection
