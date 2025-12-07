@extends('layout')

@section('content')
    <h1>Editar Alumno</h1>

    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('estudiantes.update', $estudiante) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nombre: <input type="text" name="nombre" value="{{ old('nombre', $estudiante->nombre) }}" class="form-control"></label>
        </div>
        <div class="form-group">
            <label>Apellido: <input type="text" name="apellido" value="{{ old('apellido', $estudiante->apellido) }}" class="form-control"></label>
        </div>
        <div class="form-group">
            <label>Email: <input type="email" name="email" value="{{ old('email', $estudiante->email) }}" class="form-control"></label>
        </div>
        <div class="form-group">
            <label>Teléfono: <input type="text" name="telefono" value="{{ old('telefono', $estudiante->telefono) }}" class="form-control"></label>
        </div>
        <div class="form-group">
            <label>Fecha de nacimiento: <input type="date" name="fecha_nacimiento" value="{{ old('fecha_nacimiento', $estudiante->fecha_nacimiento) }}" class="form-control"></label>
        </div>
        <button type="submit" class="btn">Actualizar</button>
        <a href="{{ route('estudiantes.index') }}" class="btn">Cancelar</a>
    </form>
@endsection
