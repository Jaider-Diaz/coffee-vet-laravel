@extends('layoutsUsuario.app')

@section('titulo-usuario')

@section('contenido')


<form action="/Usuario" method="POST" enctype="multipart/form-data">
    @csrf
<div class="mb-3" >
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Nombres</label>
        <input type="text" class=" form-control text-center" id="nombres" name="nombres">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Apellidos</label>
        <input type="text" class=" form-control text-center" id="apellidos" name="apellidos">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Genero</label>
        <input type="text" class=" form-control text-center" id="genero" name="genero">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Telefono</label>
        <input type="text" class=" form-control text-center" id="telefono" name="telefono">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Correo Electronico</label>
        <input type="text" class=" form-control text-center" id="correo" name="correo">
    </div>
    <div class="mb-3">
        <button class="btn btn-outline-success" type="submit">Registrate</button>
    </div>
</form>

@endsection
