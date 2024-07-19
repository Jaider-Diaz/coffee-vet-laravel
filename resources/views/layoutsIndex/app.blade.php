<html>

<head>
    <title> Coffee Vet @yield('tutolos')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body
    style="background-image: url('{{ asset('images/Image fondo.jpeg') }}'); background-size: cover; background-position: center;">
    <img src="{{ asset('images/Logo1.png') }}" " width="150" height="150" class="rounded mx-auto d-block" alt="...">

    <form action="/Index" method="POST">
        @csrf
        <div class="mb-3 text-center">
            <label for="formGroupExampleInput" class="form-label">Crea tu cuenta ahora</label>
            <br>
            <label for="formGroupExampleInput" class="form-label">COFFE VET " amigo fiel"</label>
    <br>
    <label for="formGroupExampleInput" class="form-label">Ya estas registrado! Accede Aqui</label>
    </div>
    <div class="mb-3 text-center">
        <label for="formGroupExampleInput" class="form-label">Por favor, escriba sus nombres y apellidos</label>
        <input type="text" class=" form-control text-center" id="nombres" name="nombres"
            placeholder="Nombre y Apellidos">
    </div>
    <div class="mb-3 text-center">
        <label for="formGroupExampleInput2" class="form-label">Ingrese su Email</label>
        <input type="email" class="form-control text-center" id="indexEmail" name="email"
            placeholder="Correo Electtronico">
    </div>
    <div class="mb-3 text-center">
        <label for="formGroupExampleInput2" class="form-label">Por favor escriba su contraseña</label>
        <input type="password" class="form-control text-center" id="indexContraseña" name="contraseña"
            placeholder="Contraseña">
    </div>
    <div class="mb-3 text-center">
        <button class="btn btn-outline-success" type="submit">Registrate</button>
    </div>
    </form>

    <div class="container">
        @yield('content')
    </div>
</body>

</html>
