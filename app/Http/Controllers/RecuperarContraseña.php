<?php

namespace App\Http\Controllers;

use App\Models\RecuperarContraseña as ModelsRecuperarContraseña;
use Illuminate\Http\Request;

class RecuperarContraseña extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('RecuperarContraseña.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $course = new ModelsRecuperarContraseña();
        $course-> ingrese_un_email = $request->input('ingrese_un_email');
        $course-> contraseña = $request->input('contraseña');

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
