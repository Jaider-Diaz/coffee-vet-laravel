@extends('layoutMascota.app')

@section('tutolo-mascota','Mascota')

@section('contenido-mascota')

<div class="row">
    @foreach ($course as $mascotas )
    <div>
        <ul class="list-unstyled">
            <li>
                <p> <strong>Nombre:</strong> {{$usuarios->nombre}} </p>
            </li>
            <li>
                <p> <strong>Raza:</strong> {{$usuarios->raza}} </p>
            </li>
            <li>
                <p> <strong>Genero:</strong> {{$usuarios->genero}} </p>
            </li>
            <li>
                <p> <strong>Edad:</strong> {{$usuarios->edad}} </p>
            </li>
            <li>
                <p> <strong>Alergias a medicantos:</strong> {{$usuarios->alergia}}</p>
            </li>
        </ul>
        <br>
    </div>
    @endforeach
</div>
@endsection
