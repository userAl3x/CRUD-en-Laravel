@extends('layout')

@section('content')
    <h1>Lista de Alumnos</h1>

    <a href="{{ route('estudiantes.create') }}" class="btn">➕ Nuevo Alumno</a>

    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    @if(count($estudiantes) > 0)
        <ul>
            @foreach($estudiantes as $estudiante)
                <li>
                    <div class="profesor-info">
                        <strong>{{ $estudiante->nombre }} {{ $estudiante->apellido }}</strong>
                        <div>Email: {{ $estudiante->email }}</div>
                        <div>Teléfono: {{ $estudiante->telefono }}</div>
                        <div>Fecha de nacimiento: {{ $estudiante->fecha_nacimiento }}</div>
                    </div>
                    <div class="profesor-actions">
                        <a href="{{ route('estudiantes.show', $estudiante) }}" class="btn">Ver</a>
                        <a href="{{ route('estudiantes.edit', $estudiante) }}" class="btn">Editar</a>
                        <form action="{{ route('estudiantes.destroy', $estudiante) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('¿Estás seguro de eliminar este alumno?')" type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    @else
        <p>No hay alumnos registrados.</p>
    @endif

    @if($errors->any())
        <div class="error">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
