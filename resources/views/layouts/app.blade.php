<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Outlet Digital</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">Outlet Digital</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                    data-bs-target="#navbarNav" aria-controls="navbarNav" 
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/rebajas') }}">Rebajas</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/login') }}">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/register') }}">Registro</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/admin') }}">Dashboard</a></li>
                </ul>
            </div>
        </div>
    </nav>

>
    <div class="container mt-4 mb-5">
        @yield('content')
    </div>


    <footer class="bg-dark text-white text-center py-3 fixed-bottom">
        <p class="mb-0">© S.A de C.V Outlet Digital - Todos los derechos reservados</p>
    </footer>
</body>
</html>
