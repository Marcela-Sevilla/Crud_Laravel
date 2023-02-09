<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
</head>
<body>
    <header>
        <nav class="navbar" style="background-color: #e3f2fd;">
            <div class="container-fluid d-flex justify-content-center">
                <a class="navbar-brand fs-3 fw-semibold" href="#">CRUD Con Laravel 8 y Bootstrap</a>
            </div>
        </nav>
    </header>

    <main class="container py-5">
        @yield('contenido')
    </main>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>