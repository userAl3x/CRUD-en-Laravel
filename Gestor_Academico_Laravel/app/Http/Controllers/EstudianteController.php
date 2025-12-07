<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;      //Importacion de modelo de estudiantes
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //Funcion para mostrar todos los estudiantes
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('estudiantes.index', compact('estudiantes'));
    }


    /**
     * Show the form for creating a new resource.
     */
    //Funcion para mostrar el formulario de creacion de estudiantes
    public function create()
    {
        return view('estudiantes.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    //Funcion para almacenar un nuevo estudiante
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required|email|unique:estudiantes',
            'telefono' => 'required',
            'fecha_nacimiento' => 'required',
        ]);

        Estudiante::create($validated);
        return redirect()->route('estudiantes.index')->with('success', 'Estudiante creado correctamente');
    }


    /**
     * Display the specified resource.
     */
    //Funcion para mostrar un estudiante en particular
    public function show(Estudiante $estudiante)
    {
        return view('estudiantes.show', compact('estudiante'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    //Funcion para mostrar el formulario de edicion de un estudiante
    public function edit(Estudiante $estudiante)
    {
        return view('estudiantes.edit', compact('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     */
    //Funcion para actualizar un estudiante
    public function update(Request $request, Estudiante $estudiante)
    {
        $validated = $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required|email|unique:estudiantes,email,' . $estudiante->id,
            'telefono' => 'required',
            'fecha_nacimiento' => 'required',
        ]);

        $estudiante -> update($validated);
        
        return redirect()->route('estudiantes.index')->with('success', 'Estudiante actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estudiante $estudiante)
    {
        $estudiante->delete();
        return redirect()->route('estudiantes.index')->with('success', 'Estudiante eliminado correctamente');
    }
}
