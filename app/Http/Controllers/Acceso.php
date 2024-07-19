<?php

namespace App\Http\Controllers;

use App\Models\Acceso as ModelsAcceso;
use Illuminate\Http\Request;

class Acceso extends Controller
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
        return view('Acceso.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $course = new ModelsAcceso();
        $course-> ingrese_su_email = $request->input('ingrese_su_email');
        $course-> ingrese_su_contraseña = $request->input('ingrese_su_contraseña');

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
