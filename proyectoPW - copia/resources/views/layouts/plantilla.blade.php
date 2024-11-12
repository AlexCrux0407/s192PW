<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turista sin Mapas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background: #77B0AA;
        }

        .navbar {
            z-index: 1050;
            position: fixed;
            top: 0;
            width: 100%;
            background-color: #E3FEF7;
            height: 60px;
            padding: 0.3rem;
            border-radius: 0 0 16px 16px;
        }

        .navbar-brand,
        .offcanvas-title {
            font-weight: 500;
            color: #003C43;
            font-size: 24px;
            transition: 0.3s color;
        }

        .login-button {
            background-color: #135D66;
            color: white;
            font-size: 10px;
            padding: 8px 20px;
            border-radius: 50px;
            text-decoration: none;
            transition: 0.3s background-color;
        }

        .login-button:hover {
            background-color: #003C43;
        }

        .navbar-toggler {
            border: none;
            font-size: 1.25rem;
        }

        .nav-link {
            color: #135D66;
            font-weight: 500;
        }

        .nav-link:hover,
        .nav-link.active {
            color: #003C43;
            font-weight: bold;
        }

        .main-content {
            padding-top: 100px;
            padding-bottom: 40px;
        }

        .card {
            background-color: #135D66;
            color: #E3FEF7;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px 0;
            padding: 20px;
        }

        .card h4 {
            text-align: center;
            color: #E3FEF7;
            font-weight: 500;
        }

        .form-label {
            color: #E3FEF7;
            font-weight: 500;
        }

        .form-select,
        .form-control,
        .btn {
            border-radius: 10px;
        }

        .form-select,
        .form-control {
            background-color: #E3FEF7;
            color: #003C43;
        }

        .form-select:focus,
        .form-control:focus {
            border-color: #003C43;
            box-shadow: none;
        }

        .btn-primary {
            background-color: #135D66;
            border: none;
            color: #E3FEF7;
            padding: 10px 20px;
            transition: 0.3s background-color;
        }

        .btn-primary:hover {
            background-color: #003C43;
        }

        .footer {
            background-color: #333;
            color: white;
            padding: 1rem;
            text-align: center;
            margin-top: auto;
        }

        .equal-height {
            display: flex;
            align-items: stretch;
        }

        .equal-height .card {
            flex: 1;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand me-auto" href="#">Turista sin mapas</a>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Turista sin mapas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 {{ Request::is('inicio') ? 'active' : '' }}"
                                href="{{ route('inicio') }}">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 {{ Request::is('vuelos') ? 'active' : '' }}"
                                href="{{ route('vuelos') }}">Vuelos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 {{ Request::is('hoteles') ? 'active' : '' }}"
                                href="{{ route('hoteles') }}">Hoteles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 {{ Request::is('reservacion') ? 'active' : '' }}"
                                href="{{ route('reservacion') }}">Reservas</a>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="{{ route('login') }}" class="login-button">Login</a>
            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <main class="main-content container">
        @yield('contenido')
    </main>

    <footer class="footer">
        Turistas de Mapas - Tu guía de viajes online
        <br>
        © 2024 Turistas de Mapas. Todos los derechos reservados.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>