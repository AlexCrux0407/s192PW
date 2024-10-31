@extends('layouts.Navbar')
@section('titulo','registro')
@section('contenido')
<div class="container mt-5 col-md-6">
    <div class="card font-monospace">
        
        <div class="card-header fs-5 text-center text-primary">
            {{__('register.header')}}
        </div>  
            <div class="card-body text-justify">

            <form action="/enviarLibro" method="POST">
            @csrf    
            <div class="mb-3">
                    <label for=ISBN class="form-label">{{__('register.isbn')}}:</label>
                    <input type="number" class="form-control" id="ISBN" name="ISBN" required value="{{old('isbn')}}">
                </div> 

                <div class="mb-3">
                    <label for=titulo class="form-label">{{__('register.titulo')}}:</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" required value="{{old('titulo')}}">
                </div> 

                <div class="mb-3">
                    <label for=autor class="form-label">{{ __('register.autor') }}:</label>
                    <input type="text" class="form-control" id="autor" name="autor" required value="{{old('autor')}}">
                </div> 

                <div class="mb-3">
                    <label for=paginas class="form-label">{{ __('register.pages') }}:</label>
                    <input type="number" class="form-control" id="paginas" name="paginas" required value="{{old('paginas')}}">
                </div> 

                <div class="mb-3">
                    <label for=año class="form-label">{{ __('register.año') }}:</label>
                    <input type="number" class="form-control" id="año" name="año" requiredvalue="{{old('año')}}">
                </div> 

                <div class="mb-3">
                    <label for=mail class="form-label">{{ __('register.email') }}:</label>
                    <input type="email" class="form-control" id="mail" name="mail" required value="{{old('mail')}}">
                </div> 

                <button type='submit' class="btn btn-success btn-sm">{{ __('register.guardar') }}</button>

            </form>
        </div>
    </div>
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

@endsection('contenido')