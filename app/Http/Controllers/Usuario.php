<?php

namespace App\Http\Controllers;


use App\Models\Usuario as ModelsUsuario;
use Illuminate\Http\Request;

class Usuario extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course = ModelsUsuario::all();
        return view('Usuario.index',compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $course = new ModelsUsuario();
        $course-> nombres = $request->input('nombres');
        $course-> apellidos = $request->input('apellidos');
        $course-> genero = $request->input('genero');
        $course-> telefono = $request->input('telefono');
        $course-> correo = $request->input('correo');

        $course->save();
        return 'Se guardo exitosamente';


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
