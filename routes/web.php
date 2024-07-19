<?php

use App\Http\Controllers\Acceso;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\Index;
use App\Http\Controllers\Mascota;
use App\Http\Controllers\Usuario;
use App\Http\Controllers\RecuperarContraseña;
use App\Http\Controllers\SaludoController;
use App\Http\Controllers\Solicitud;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/app', function () {
    return 'Este es mi proyecto formativo';
});


//Route::get('/saludo', [SaludoController::class, 'saludito']);

Route::resource('/cursos', CursoController::class);
Route::resource('/Acceso', Acceso::class);
Route::resource('/Index', Index::class);
Route::resource('/Mascota', Mascota::class);
Route::resource('/Usuario', Usuario::class);
Route::resource('/RecuperarContraseña', RecuperarContraseña::class);
Route::resource('/Solicitud', Solicitud::class);


