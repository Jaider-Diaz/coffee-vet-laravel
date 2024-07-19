<?php

namespace App\Http\Controllers;

use App\Models\Mascota as ModelsMascota;
use Illuminate\Http\Request;

class Mascota extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course = ModelsMascota::all();
        return view('Mascota.index', compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Mascota.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $course = new ModelsMascota();
        $course-> nombre = $request->input('nombre');
        $course-> edad = $request->input('edad');
        $course-> raza = $request->input('raza');
        $course-> genero = $request->input('genero');
        $course-> alergia = $request->input('alergia');

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
