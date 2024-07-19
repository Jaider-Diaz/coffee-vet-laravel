<?php

namespace App\Http\Controllers;

use App\Models\Index as ModelsIndex;
use Illuminate\Http\Request;

class Index extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Index.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return $request->all();
        $course = new ModelsIndex();
        $course-> nombres = $request->input('nombres');
        $course-> email = $request->input('email');
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
