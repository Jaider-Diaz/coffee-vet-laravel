<html>

<head>
    <title> Coffee Vet @yield ('titulo-usuario')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body
    style="background-image: url('{{ asset('images/Image fondo.jpeg') }}'); background-size: cover; background-position: center;">

        <nav class="navbar bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('images/Logo1.png') }}" " width="110" height="110" class="rounded mx-auto d-block" alt="Logo de la aplicacion">
                    Coffee Vet
                </a>
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Mi Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mi Mascota</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Doctor</a>
                    </li>
                </ul>
            </div>
        </nav>

    <div class="container">
        @yield('contenido')
    </div>
</body>

</html>
