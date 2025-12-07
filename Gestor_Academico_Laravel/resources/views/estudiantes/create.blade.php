@extends('layout')

@section('content')
    <h1>Crear Alumno</h1>

    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('estudiantes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nombre: <input type="text" name="nombre" value="{{ old('nombre') }}" class="form-control"></label>
        </div>
        <div class="form-group">
            <label>Apellido: <input type="text" name="apellido" value="{{ old('apellido') }}" class="form-control"></label>
        </div>
        <div class="form-group">
            <label>Email: <input type="email" name="email" value="{{ old('email') }}" class="form-control"></label>
        </div>
        <div class="form-group">
            <label>Teléfono: <input type="text" name="telefono" value="{{ old('telefono') }}" class="form-control"></label>
        </div>
        <div class="form-group">
            <label>Fecha de nacimiento: <input type="date" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" class="form-control"></label>
        </div>
        <button type="submit" class="btn">Guardar</button>
        <a href="{{ route('estudiantes.index') }}" class="btn">Cancelar</a>
    </form>
@endsection
