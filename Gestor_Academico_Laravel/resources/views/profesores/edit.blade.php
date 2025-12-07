@extends('layout')

@section('content')
    <h1>Editar Profesor</h1>

    <form action="{{ route('profesores.update', $profesor->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $profesor->nombre) }}" required>
        </div>

        <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" id="apellido" value="{{ old('apellido', $profesor->apellido) }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ old('email', $profesor->email) }}" required>
        </div>

        <div class="form-group">
            <label for="departamento">Departamento:</label>
            <input type="text" name="departamento" id="departamento" value="{{ old('departamento', $profesor->departamento) }}" required>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn">Guardar Cambios</button>
            <a href="{{ route('profesores.index') }}" class="btn">Cancelar</a>
        </div>
    </form>

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
