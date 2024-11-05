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
    @extends('layouts.plantilla')

    <main>
        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-8 mx-auto">
                    <h1 class="fw-light">Destinos Populares</h1>
                    <p class="lead text-muted">Explora los destinos más emocionantes y planea tu próxima aventura.</p>
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('images/destinos/destino1.jpg') }}" alt="Destino 1" class="img-fluid mx-2"
                            style="width: 150px; height: 100px;">
                        <img src="{{ asset('images/destinos/destino2.jpg') }}" alt="Destino 2" class="img-fluid mx-2"
                            style="width: 150px; height: 100px;">
                        <img src="{{ asset('images/destinos/destino3.jpg') }}" alt="Destino 3" class="img-fluid mx-2"
                            style="width: 150px; height: 100px;">
                    </div>
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
                                    <select id="origen" name="origen" class="form-select" required>
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
                                    <select id="destino" name="destino" class="form-select" required>
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

                                    <label for="fecha" class="form-label">Fecha de salida</label>
                                    <input type="date" id="fecha" name="fecha" class="form-control"
                                        min="{{ date('Y-m-d') }}" required>

                                    <label for="pasajeros" class="form-label">Número de pasajeros</label>
                                    <div class="d-flex">
                                        <input type="number" name="adultos" class="form-control me-2"
                                            placeholder="Adultos" min="1" required>
                                        <input type="number" name="niños" class="form-control me-2" placeholder="Niños"
                                            min="0">
                                        <input type="number" name="infantes" class="form-control" placeholder="Infantes"
                                            min="0">
                                    </div>

                                    <label for="clase" class="form-label">Clase</label>
                                    <select id="clase" name="clase" class="form-select" required>
                                        <option selected>Seleccione una clase</option>
                                        <option value="economica">Económica</option>
                                        <option value="ejecutiva">Ejecutiva</option>
                                        <option value="primera">Primera Clase</option>
                                    </select>

                                    <label for="aerolinea" class="form-label">Aerolínea (opcional)</label>
                                    <select id="aerolinea" name="aerolinea" class="form-select">
                                        <option selected>Cualquiera</option>
                                        <option value="Aeromexico">Aeroméxico</option>
                                        <option value="LATAM">LATAM</option>
                                        <option value="American Airlines">American Airlines</option>
                                        <option value="Iberia">Iberia</option>
                                        <option value="United Airlines">United Airlines</option>
                                    </select>

                                    <label for="precio_maximo" class="form-label">Precio máximo (opcional)</label>
                                    <input type="number" id="precio_maximo" name="precio_maximo" class="form-control"
                                        placeholder="Máximo en USD">

                                    <label for="escalas" class="form-label">Escalas</label>
                                    <select id="escalas" name="escalas" class="form-select">
                                        <option selected>Cualquiera</option>
                                        <option value="directo">Directo</option>
                                        <option value="1_escala">1 Escala</option>
                                        <option value="2_escalas">2 Escalas</option>
                                    </select>

                                    <label for="horario" class="form-label">Horario de salida (opcional)</label>
                                    <input type="time" id="horario" name="horario" class="form-control">

                                    <button type="submit" class="btn btn-primary w-100 mt-3">Buscar vuelo</button>
                                </form>
                            </div>
                        </div>
                    </div>


                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h4 class="text-center">Buscar un hotel</h4>
                            <form action="{{ route('rutabuscarHotel') }}" method="POST">
                                @csrf
                                <label for="ciudad" class="form-label">Ciudad</label>
                                <select id="ciudad" name="ciudad" class="form-select">
                                    <option value="Buenos Aires">Buenos Aires</option>
                                    <option value="Bogotá">Bogotá</option>
                                    <option value="Lima">Lima</option>
                                    <option value="Ciudad de México">Ciudad de México</option>
                                    <option value="Santiago">Santiago</option>
                                </select>

                                <label for="checkin" class="form-label">Fecha de check-in</label>
                                <input type="date" id="checkin" name="checkin" class="form-control"
                                    min="{{ date('Y-m-d') }}">

                                <label for="checkout" class="form-label">Fecha de check-out</label>
                                <input type="date" id="checkout" name="checkout" class="form-control"
                                    min="{{ date('Y-m-d') }}">

                                <label for="habitaciones" class="form-label">Número de habitaciones</label>
                                <input type="number" id="habitaciones" name="habitaciones" class="form-control" min="1"
                                    max="5" value="1">

                                <label for="adultos" class="form-label">Adultos</label>
                                <input type="number" id="adultos" name="adultos" class="form-control" min="1" max="10"
                                    value="1">

                                <label for="ninos" class="form-label">Niños</label>
                                <input type="number" id="ninos" name="ninos" class="form-control" min="0" max="5"
                                    value="0">

                                <label for="categoria" class="form-label">Categoría del hotel</label>
                                <select id="categoria" name="categoria" class="form-select">
                                    <option value="1">1 estrella</option>
                                    <option value="2">2 estrellas</option>
                                    <option value="3">3 estrellas</option>
                                    <option value="4">4 estrellas</option>
                                    <option value="5">5 estrellas</option>
                                </select>

                                <label for="precio_max" class="form-label">Precio máximo (opcional)</label>
                                <input type="number" id="precio_max" name="precio_max" class="form-control"
                                    placeholder="Máximo en USD">

                                <label for="distancia" class="form-label">Distancia al centro o punto turístico
                                    (opcional)</label>
                                <input type="number" id="distancia" name="distancia" class="form-control"
                                    placeholder="Máximo en km">

                                <label for="servicios" class="form-label">Servicios</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="wifi" name="servicios[]"
                                        value="wifi">
                                    <label class="form-check-label" for="wifi">Wi-Fi</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="piscina" name="servicios[]"
                                        value="piscina">
                                    <label class="form-check-label" for="piscina">Piscina</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="desayuno" name="servicios[]"
                                        value="desayuno">
                                    <label class="form-check-label" for="desayuno">Desayuno incluido</label>
                                </div>

                                <button type="submit" class="btn btn-primary w-100 mt-3">Buscar hotel</button>
                            </form>
                        </div>
                    </div>


                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h4 class="text-center">Consultar una reserva</h4>
                            <form action="{{ route('rutaConsultar') }}" method="POST">
                                @csrf
                                <label for="reserva" class="form-label">ID de la reserva</label>
                                <input type="text" id="reserva" name="reserva" class="form-control" maxlength="10"
                                    minlength="10" pattern="\d{10}" required
                                    placeholder="Ingrese los 10 dígitos de la reserva">
                                <button type="submit" class="btn btn-primary w-100 mt-3">Consultar reserva</button>
                            </form>
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