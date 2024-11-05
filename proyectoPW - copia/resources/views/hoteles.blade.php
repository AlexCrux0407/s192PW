@extends('layouts.plantilla')

@section('contenido')
<div class="wrapper">
    <h1>Buscar Hotel</h1>
    <form action="{{ route('rutabuscarHotel') }}" method="POST">
        @csrf
        <div class="input-box">
            <label for="ciudad" class="form-label">Ciudad</label>
            <select id="ciudad" name="ciudad" class="form-select" required>
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
            <label for="checkin" class="form-label">Fecha de Check-in</label>
            <input type="date" id="checkin" name="checkin" class="form-control" min="{{ date('Y-m-d') }}" required>
        </div>

        <div class="input-box">
            <label for="checkout" class="form-label">Fecha de Check-out</label>
            <input type="date" id="checkout" name="checkout" class="form-control" min="{{ date('Y-m-d') }}" required>
        </div>

        <button type="submit" class="btn">Buscar Hotel</button>
    </form>
</div>

@if (session('success_hotel'))
    <script>
        Swal.fire({
            icon: 'success',
            title: '¡Éxito!',
            text: "{{ session('success_hotel') }}",
            confirmButtonText: 'Aceptar'
        });
    </script>
@endif

@if (session('errors_hotel'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Errores de Validación',
            html: `
                <ul style="text-align: left;">
                    @foreach (session('errors_hotel')->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            `,
            confirmButtonText: 'Aceptar'
        });
    </script>
@endif
@endsection
