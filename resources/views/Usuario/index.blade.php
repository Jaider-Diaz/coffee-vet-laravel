@extends('layoutsUsuario.app')

@section('titulo-usuario','Inicio')

@section('contenido')

<div class="row">
    @foreach ($course as $usuarios )
    <div>
        <ul class="list-unstyled">
            <li>
                <p> <strong>Nombres:</strong> {{$usuarios->nombres}} </p>
            </li>
            <li>
                <p> <strong>Apellidos:</strong> {{$usuarios->apellidos}} </p>
            </li>
            <li>
                <p> <strong>Genero:</strong> {{$usuarios->genero}} </p>
            </li>
            <li>
                <p> <strong>Telefono:</strong> {{$usuarios->telefono}} </p>
            </li>
            <li>
                <p> <strong>Direccion:</strong> {{$usuarios->direccion}}</p>
            </li>
            <li>
                <p> <strong>Correo Electronico:</strong> {{$usuarios->correo}}</p>
            </li>
        </ul>
        <br>
    </div>
    @endforeach

</div>
@endsection
