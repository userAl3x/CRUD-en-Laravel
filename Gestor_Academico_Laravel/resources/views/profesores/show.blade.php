@extends('layout')

@section('content')
    <h1>Detalles del Profesor</h1>

    <div class="profesor-details-card">
        <div class="detail-row">
            <span class="detail-label">Nombre:</span>
            <span>{{ $profesor->nombre }}</span>
        </div>
        <div class="detail-row">
            <span class="detail-label">Apellido:</span>
            <span>{{ $profesor->apellido }}</span>
        </div>
        <div class="detail-row">
            <span class="detail-label">Email:</span>
            <span>{{ $profesor->email }}</span>
        </div>
        <div class="detail-row">
            <span class="detail-label">Departamento:</span>
            <span>{{ $profesor->departamento }}</span>
        </div>
    </div>

    <div class="actions">
        <a href="{{ route('profesores.edit', $profesor->id) }}" class="btn">Editar</a>
        <form action="{{ route('profesores.destroy', $profesor->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button onclick="return confirm('¿Estás seguro de eliminar este profesor?')" type="submit" class="btn btn-danger">Eliminar</button>
        </form>
        <a href="{{ route('profesores.index') }}" class="btn">Volver a la lista</a>
    </div>
@endsection

@push('styles')
<style>
.profesor-details-card {
    background: #fafbfc;
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    padding: 24px 32px;
    max-width: 400px;
    margin-bottom: 32px;
}
.detail-row {
    display: flex;
    margin-bottom: 12px;
}
.detail-label {
    width: 120px;
    font-weight: bold;
    color: #333;
    display: inline-block;
}
</style>
@endpush
