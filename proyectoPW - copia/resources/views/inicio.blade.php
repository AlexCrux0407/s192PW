<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turista sin Mapas</title>
    <style>
        .card-body {
            background-color: #135D66;
            font-weight: 500;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    @include('layouts.plantilla')

    <main>
        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Album example</h1>
                </div>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h4 class="text-center">Buscar un vuelo</h4>
                                <form action="{{ route('rutabuscarVuelo') }}" method="POST">
                                    @csrf
                                    <label for="origen" class="form-label">Origen</label>
                                    <select id="origen" name="origen" class="form-select">
                                        <option selected>Seleccione una ciudad</option>
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

                                    <label for="destino" class="form-label">Destino</label>
                                    <select id="destino" name="destino" class="form-select">
                                        <option selected>Seleccione una ciudad</option>
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

                                    <label for="fecha" class="form-label">Fecha</label>
                                    <input type="date" id="fecha" name="fecha" class="form-control"
                                        min="{{ date('Y-m-d') }}">

                                    <button type="submit" class="btn btn-primary w-100">Buscar vuelo</button>
                                </form>

                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h4 class="text-center">Buscar un hotel</h4>
                                <form action="{{ route('rutabuscarHotel') }}" method="POST">
                                    @csrf
                                    <label for="ciudad" class="form-label">Ciudad</label>
                                    <select id="ciudad" name="ciudad" class="form-select">
                                        <option selected>Seleccione una ciudad</option>
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

                                    <label for="checkin" class="form-label">Fecha de check-in</label>
                                    <input type="date" id="checkin" name="checkin" class="form-control">

                                    <label for="checkout" class="form-label">Fecha de check-out</label>
                                    <input type="date" id="checkout" name="checkout" class="form-control">

                                    <button type="submit" class="btn btn-primary w-100">Buscar hotel</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h4 class="text-center">Consultar una reserva</h4>
                                <form action="{{ route('rutaConsultar') }}" method="POST">
                                    @csrf
                                    <label for="reserva" class="form-label">ID de la reserva</label>
                                    <input type="text" id="reserva" name="reserva" class="form-control">

                                    <button type="submit" class="btn btn-primary w-100">Consultar reserva</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
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

    @if(session('success_vuelo'))
        <script>
            Swal.fire({
                title: '¡Éxito!',
                text: "{{ session('success_vuelo') }}",
                icon: 'success',
                confirmButtonText: 'Aceptar'
            });
        </script>
    @endif

    @if(session('success_hotel'))
        <script>
            Swal.fire({
                title: '¡Éxito!',
                text: "{{ session('success_hotel') }}",
                icon: 'success',
                confirmButtonText: 'Aceptar'
            });
        </script>
    @endif

    @if(session('success_reserva'))
        <script>
            Swal.fire({
                title: '¡Éxito!',
                text: "{{ session('success_reserva') }}",
                icon: 'success',
                confirmButtonText: 'Aceptar'
            });
        </script>
    @endif

    @if (session('errors_vuelo'))
        <script>
            Swal.fire({
                title: 'Errores de Validación en Vuelo',
                html: `<ul style="text-align: left;">@foreach (session('errors_vuelo')->all() as $error)<li>{{ $error }}</li>@endforeach</ul>`,
                icon: 'error',
                confirmButtonText: 'Aceptar'
            });
        </script>
    @endif

    @if (session('errors_hotel'))
        <script>
            Swal.fire({
                title: 'Errores de Validación en Hotel',
                html: `<ul style="text-align: left;">@foreach (session('errors_hotel')->all() as $error)<li>{{ $error }}</li>@endforeach</ul>`,
                icon: 'error',
                confirmButtonText: 'Aceptar'
            });
        </script>
    @endif

    @if (session('errors_reserva'))
        <script>
            Swal.fire({
                title: 'Errores de Validación en Reserva',
                html: `<ul style="text-align: left;">@foreach (session('errors_reserva')->all() as $error)<li>{{ $error }}</li>@endforeach</ul>`,
                icon: 'error',
                confirmButtonText: 'Aceptar'
            });
        </script>
    @endif
</body>

</html>