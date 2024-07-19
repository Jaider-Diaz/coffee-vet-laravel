<html>

<head>
    <title>Coffee Vet @yield('titulo-contraseña')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body
    style="background-image: url('{{ asset('images/Image fondo.jpeg') }}'); background-size: cover; background-position: center;">
    <img src="{{ asset('images/Logo1.png') }}" " width="150" height="150" class="rounded mx-auto d-block" alt="...">

    <form action="/Contraseña" method="POST">
        @csrf
    <div class="mb-3 text-center">
        <label for="formGroupExampleInput" class="form-label">Olvidaste tu Contraseña</label>
    </div >
    <div class="mb-3 text-center">
        <label for="formGroupExampleInput" class="form-label">Ingrese su Correo</label>
        <input type="text" class=" form-control text-center"  id="ingrese_un_email" name="ingrese_un_email" placeholder="Correo Electronico">
    </div>
    <div class="mb-3 text-center">
        <label for="formGroupExampleInput2" class="form-label">Nueva Contraseña</label>
        <input type="password" class="form-control text-center" id="contraseña" name="contraseña" placeholder="Contraseña">
    </div>
    <div class="mb-3 text-center">
        <button class="btn btn-outline-success" type="submit">Registrate</button>
    </div>
    </form>



    <div class="container">
        @yield('contenido')
    </div>
</body>

</html>
