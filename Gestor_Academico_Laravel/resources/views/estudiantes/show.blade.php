@extends('layout')

@section('content')
    <h1>Alumno: {{ $estudiante->nombre }} {{ $estudiante->apellido }}</h1>

    <div class="info-card">
        <p><strong>Email:</strong> {{ $estudiante->email }}</p>
        <p><strong>Teléfono:</strong> {{ $estudiante->telefono }}</p>
        <p><strong>Fecha de nacimiento:</strong> {{ $estudiante->fecha_nacimiento }}</p>
    </div>

    <div class="actions">
        <a href="{{ route('estudiantes.edit', $estudiante) }}" class="btn">Editar</a>
        <a href="{{ route('estudiantes.index') }}" class="btn">Volver a la lista</a>
    </div>
@endsection
