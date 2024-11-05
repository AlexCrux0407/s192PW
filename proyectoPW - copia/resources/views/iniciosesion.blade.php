@extends('layouts.plantilla') 

@section('contenido')
<div class="container mt-5 pt-5 d-flex justify-content-center align-items-center">
    <div class="wrapper" style="max-width: 400px; background-color: #135D66; color: #E3FEF7; padding: 30px; border-radius: 10px;">
        <form action="{{ route('procesarLogin') }}" method="POST">
            @csrf
            <h1 class="text-center" style="font-size: 28px; font-weight: bold; margin-bottom: 20px;">Inicio de Sesión</h1>
            <div class="input-box mb-3">
                <input type="text" name="usuario" placeholder="Usuario" required style="width: 100%; padding: 10px; border-radius: 5px; border: none; outline: none;">
            </div>
            <div class="input-box mb-3">
                <input type="password" name="contraseña" placeholder="Contraseña" required style="width: 100%; padding: 10px; border-radius: 5px; border: none; outline: none;">
            </div>
            <div class="remember-forgot d-flex justify-content-between mb-3" style="font-size: 14px;">
                <label><input type="checkbox" name="recordar" style="margin-right: 5px;"> Recordarme</label>
                <a href="#" style="color: #E3FEF7; text-decoration: none;">¿Olvidaste la contraseña?</a>
            </div>
            <button type="submit" class="btn btn-light w-100 mb-3" style="font-weight: bold; color: #135D66;">Login</button>
            <div class="register-link text-center" style="font-size: 14px;">
                <p>¿No tienes una cuenta? <a href="{{ route('registro') }}" style="color: #E3FEF7; text-decoration: none; font-weight: bold;">Regístrate</a></p>
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
</div>
@endsection
