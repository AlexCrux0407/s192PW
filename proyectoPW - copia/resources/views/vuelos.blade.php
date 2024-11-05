@extends('layouts.plantilla')

@section('contenido')
<div class="wrapper">
    <h1>Buscar Vuelo</h1>
    <form action="{{ route('rutabuscarVuelo') }}" method="POST">
        @csrf
        <div class="input-box">
            <label for="origen" class="form-label">Origen</label>
            <select id="origen" name="origen" class="form-select" required>
                <option selected disabled>Seleccione una ciudad</option>
                <option value="Buenos Aires">Buenos Aires</option>
                <option value="Bogotá">Bogotá</option>
                <option value="Lima">Lima</option>
                <option value="Ciudad de México">Ciudad de México</option>
                <option value="Santiago">Santiago</option>
                <option value="Montevideo">Montevideo</option>
                <option value="Caracas">Caracas</option>
                <option value="San Juan">San Juan</option>
                <option value="Quito">Quito</option>
                <option value="La Paz">La Paz</option>
            </select>
        </div>
        
        <div class="input-box">
            <label for="destino" class="form-label">Destino</label>
            <select id="destino" name="destino" class="form-select" required>
                <option selected disabled>Seleccione una ciudad</option>
                <option value="Madrid">Madrid</option>
                <option value="París">París</option>
                <option value="Nueva York">Nueva York</option>
                <option value="Tokio">Tokio</option>
                <option value="Sídney">Sídney</option>
                <option value="Londres">Londres</option>
                <option value="Roma">Roma</option>
                <option value="Toronto">Toronto</option>
                <option value="Dubái">Dubái</option>
                <option value="Bangkok">Bangkok</option>
            </select>
        </div>

        <div class="input-box">
            <label for="fecha" class="form-label">Fecha de Vuelo</label>
            <input type="date" id="fecha" name="fecha" class="form-control" min="{{ date('Y-m-d') }}" required>
        </div>

        <button type="submit" class="btn">Buscar Vuelo</button>
    </form>
</div>

@if (session('success_vuelo'))
    <script>
        Swal.fire({
            icon: 'success',
            title: '¡Éxito!',
            text: "{{ session('success_vuelo') }}",
            confirmButtonText: 'Aceptar'
        });
    </script>
@endif

@if (session('errors_vuelo'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Errores de Validación',
            html: `
                <ul style="text-align: left;">
                    @foreach (session('errors_vuelo')->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            `,
            confirmButtonText: 'Aceptar'
        });
    </script>
@endif
@endsection
