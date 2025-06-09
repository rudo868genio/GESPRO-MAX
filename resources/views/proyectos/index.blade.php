@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Proyectos Activos/Inactivos</h1>

    <!-- Botón para crear un nuevo proyecto -->
    <div class="mb-4">
        <a href="{{ route('proyectos.create') }}" class="btn btn-success">
            <i class="fas fa-plus"></i> Crear Nuevo Proyecto
        </a>
    </div>

    <!-- Tarjetas de proyectos -->
    <div class="row">
        @forelse($proyectos as $proyecto)
            <div class="col-md-4">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $proyecto->nombre }}</h5>
                        <p class="card-text">{{ $proyecto->descripcion }}</p>
                        <p>
                            <i class="fas fa-calendar-alt text-primary mb-1"></i>
                            <strong>Fecha Inicio:</strong> {{ \Carbon\Carbon::parse($proyecto->fecha_inicio)->format('d/m/Y') }}
                        </p>
                        <p>
                            <i class="fas fa-calendar-check text-success mb-1"></i>
                            <strong>Fecha Final:</strong> {{ \Carbon\Carbon::parse($proyecto->fecha_final)->format('d/m/Y') }}
                        </p>
                        <p>
                            <strong>Estado:</strong>
                                <span class="badge {{ $proyecto->estado == 1 ? 'bg-success' : 'bg-secondary' }}">
                                    {{ $proyecto->estado == 1 ? 'Activo' : 'Inactivo' }}
                                </span>
                        </p>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('proyectos.show', $proyecto) }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-eye"></i> Ver Más
                            </a>
                            <a href="{{ route('proyectos.edit', $proyecto) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Editar
                            </a>
                            <form action="{{ route('proyectos.destroy', $proyecto) }}" method="POST" style="display:inline;" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este proyecto?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash-alt"></i> Eliminar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info text-center">
                    No hay proyectos registrados.
                </div>
            </div>
        @endforelse
    </div>
</div>
@endsection
