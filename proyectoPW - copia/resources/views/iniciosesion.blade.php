@extends('layouts.plantilla') 

@section('contenido')
<div class="wrapper">
    <form action="{{ route('procesarLogin') }}" method="POST">
        @csrf
        <h1>Inicio de Sesión</h1>
        <div class="input-box">
            <input type="text" name="usuario" placeholder="Usuario" required>
            <i class='bx bxs-user-circle'></i>
        </div>
        <div class="input-box">
            <input type="password" name="contraseña" placeholder="Contraseña" required>
            <i class='bx bxs-lock'></i>
        </div>
        <div class="remember-forgot">
            <label><input type="checkbox" name="recordar"> Recordarme</label>
            <a href="#">¿Olvidaste la contraseña?</a>
        </div>
        <button type="submit" class="btn">Login</button>
        <div class="register-link">
            <p>¿No tienes una cuenta? <a href="{{ route('registro') }}">Regístrate</a></p>
        </div>
    </form>
    @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: '¡Éxito!',
                text: "{{ session('success') }}",
                confirmButtonText: 'Aceptar'
            });
        </script>
    @endif
</div>
@endsection