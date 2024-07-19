@extends('layoutMascota.app')

@section('tutolo-mascota')

@section('contenido-mascota')


<form action="/Mascota" method="POST" enctype="multipart/form-data">
    @csrf
<div >
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Nombre</label>
        <input type="text" class=" form-control text-center" id="nombre" name="nombre">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Raza</label>
        <input type="text" class=" form-control text-center" id="raza" name="raza">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Genero</label>
        <input type="text" class=" form-control text-center" id="genero" name="genero">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Edad</label>
        <input type="text" class=" form-control text-center" id="edad" name="edad">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Alergias a medicamentos</label>
        <input type="text" class=" form-control text-center" id="alergia" name="alergia">
    </div>
    <div class="mb-3">
        <button class="btn btn-outline-success" type="submit">Registrate</button>
    </div>
</form>

@endsection
