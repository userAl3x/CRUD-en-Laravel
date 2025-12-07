<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //Funcion para mostrar todos los profesores
    public function index()
    {
        $profesores = Profesor::all();
        return view('profesores.index', compact('profesores'));
    }


    /**
     * Show the form for creating a new resource.
     */
    //Funcion para crear un nuevo profesor
    public function create()
    {
        return view('profesores.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    //Funcion para almacenar un nuevo profesor  
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required|email|unique:profesores,email',
            'departamento' => 'required',
        ]);

        Profesor::create($validated);
        
        return redirect()->route('profesores.index')->with('success', 'Profesor creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    //Funcion para mostrar un profesor en especifico
    public function show(string $id)
    {
        $profesor = Profesor::findOrFail($id);
        return view('profesores.show', compact('profesor'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    //Funcion para editar un profesor en especifico
    public function edit(string $id)
    {
        $profesor = Profesor::findOrFail($id);
        return view('profesores.edit', compact('profesor'));
    }

    /**
     * Update the specified resource in storage.
     */
    //Funcion para actualizar un profesor en especifico
    public function update(Request $request, string $id)
    {
        $profesor = Profesor::findOrFail($id);
        
        $validated = $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required|email|unique:profesores,email,' . $id,
            'departamento' => 'required',
        ]);

        $profesor->update($validated);

        return redirect()->route('profesores.index')->with('success', 'Profesor actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    //Funcion para eliminar un profesor en especifico   
    public function destroy(string $id)
    {
        $profesor = Profesor::findOrFail($id);
        $profesor->delete();

        return redirect()->route('profesores.index')->with('success', 'Profesor eliminado correctamente');
    }
}
