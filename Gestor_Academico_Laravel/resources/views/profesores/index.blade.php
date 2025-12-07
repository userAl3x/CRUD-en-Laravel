@extends('layout')

@section('content')
    <h1>Lista de Profesores</h1>

    <a href="{{ route('profesores.create') }}" class="btn">➕ Nuevo Profesor</a>

    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    @if(count($profesores) > 0)
        <ul>
            @foreach($profesores as $profesor)
                <li>
                    <div class="profesor-info">
                        <strong>{{ $profesor->nombre }} {{ $profesor->apellido }}</strong>
                        <div>Email: {{ $profesor->email }}</div>
                        <div>Departamento: {{ $profesor->departamento }}</div>
                    </div>
                    <div class="profesor-actions">
                        <a href="{{ route('profesores.show', $profesor->id) }}" class="btn">Ver</a>
                        <a href="{{ route('profesores.edit', $profesor->id) }}" class="btn">Editar</a>
                        <form action="{{ route('profesores.destroy', $profesor->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('¿Estás seguro de eliminar este profesor?')" type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    @else
        <p>No hay profesores registrados.</p>
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
