<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Butterfly</title>
    <!-- FavIcon -->
    <link rel="shortcut icon" href="{{ asset('img/icon.png') }}" type="image/x-icon">
    <!-- Style Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <!-- Bootstrap-Icons -->
    <link rel="stylesheet" href="{{ asset('bootstrap-icons/bootstrap-icons.css') }}" />
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-light">
    <header>
        <nav class="navbar p-0">
            <div class="container-fluid">
                <a class="navbar-brand d-flex" href="/">
                <img src="{{ asset('img/logo.png') }}" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
                <span class="fw-semibold fs-3 ms-2">Butterfly Clothing Store</span>
                </a>
            </div>
        </nav>
    </header>

    <main class="container py-5">
        @yield('contenido')
    </main>

    <footer class="text-center text-secondary fw-semibold py-2 fixed-bottom">
        <a href="https://github.com/Marcela-Sevilla" target="_blank" class="text-decoration-none text-secondary">Marcela Sevilla</a> ADSO-1 2023
    </footer>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>