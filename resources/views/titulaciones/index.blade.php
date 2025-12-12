@extends('layouts.app')

@section('title', 'Titulaciones')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col">
            <h2>Lista de Titulaciones</h2>
        </div>
        <div class="col text-end">
            <a href="{{ route('titulaciones.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Nueva Titulación
            </a>
        </div>
    </div>

    <!-- Mensajes -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            @if($titulaciones->count() > 0)
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>No. Control</th>
                                <th>Periodo</th>
                                <th>Opción Titulación</th>
                                <th>Estatus</th>
                                <th>Tema</th>
                                <th>Fecha Expedición</th>
                                <th>Número Título</th>
                                <th>Clave</th>
                                <th>País</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($titulaciones as $titulacion)
                                <tr>
                                    <td>{{ $titulacion->no_de_control }}</td>
                                    <td>{{ $titulacion->periodo }}</td>
                                    <td>{{ $titulacion->opcion_titulacion ?? 'N/A' }}</td>
                                    <td>
                                        @if($titulacion->estatus_titulacion)
                                            <span class="badge bg-{{ $titulacion->estatus_titulacion == 'Completado' ? 'success' : ($titulacion->estatus_titulacion == 'En Proceso' ? 'warning' : 'secondary') }}">
                                                {{ $titulacion->estatus_titulacion }}
                                            </span>
                                        @else
                                            <span class="badge bg-secondary">N/A</span>
                                        @endif
                                    </td>
                                    <td>{{ Str::limit($titulacion->tema, 30) }}</td>
                                    <td>{{ $titulacion->fecha_expedicion_titulo ? $titulacion->fecha_expedicion_titulo->format('d/m/Y') : 'N/A' }}</td>
                                    <td>{{ $titulacion->numero_titulo }}</td>
                                    <td>{{ $titulacion->clave ?? 'N/A' }}</td>
                                    <td>{{ $titulacion->pais ?? 'N/A' }}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('titulaciones.show', $titulacion->id) }}" class="btn btn-sm btn-info">
                                                <i class="bi bi-eye"></i> Ver
                                            </a>
                                            <a href="{{ route('titulaciones.edit', $titulacion->id) }}" class="btn btn-sm btn-warning">
                                                <i class="bi bi-pencil"></i> Editar
                                            </a>
                                            <form action="{{ route('titulaciones.destroy', $titulacion->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('¿Deseas eliminar esta titulación?')">
                                                    <i class="bi bi-trash"></i> Eliminar
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Paginación -->
                <div class="mt-3">
                </div>
            @else
                <div class="alert alert-info">
                    <i class="bi bi-info-circle"></i> No hay titulaciones registradas.
                    <a href="{{ route('titulaciones.create') }}">Crear la primera</a>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection