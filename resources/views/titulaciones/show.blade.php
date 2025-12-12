@extends('layouts.app')

@section('title', 'Detalles de Titulación')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Detalles de la Titulación</h4>
                </div>
                <div class="card-body">
                    
                    <!-- Sección: Información General -->
                    <h5 class="bg-light p-2 mb-3">Información General</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <strong>No. de Control:</strong>
                                <p class="text-muted">{{ $titulacion->no_de_control ?? 'N/A' }}</p>
                            </div>

                            <div class="mb-3">
                                <strong>Periodo:</strong>
                                <p class="text-muted">{{ $titulacion->periodo ?? 'N/A' }}</p>
                            </div>

                            <div class="mb-3">
                                <strong>Opción de Titulación:</strong>
                                <p class="text-muted">{{ $titulacion->opcion_titulacion ?? 'N/A' }}</p>
                            </div>

                            <div class="mb-3">
                                <strong>Opción Titulación (Letra):</strong>
                                <p class="text-muted">{{ $titulacion->opcion_titulacion_letra ?? 'N/A' }}</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <strong>Estatus de Titulación:</strong>
                                <p class="text-muted">
                                    @if($titulacion->estatus_titulacion)
                                        <span class="badge bg-{{ $titulacion->estatus_titulacion == 'Completado' ? 'success' : ($titulacion->estatus_titulacion == 'En Proceso' ? 'warning' : 'secondary') }}">
                                            {{ $titulacion->estatus_titulacion }}
                                        </span>
                                    @else
                                        N/A
                                    @endif
                                </p>
                            </div>

                            <div class="mb-3">
                                <strong>Clave:</strong>
                                <p class="text-muted">{{ $titulacion->clave ?? 'N/A' }}</p>
                            </div>

                            <div class="mb-3">
                                <strong>Nombre Documento Sustento:</strong>
                                <p class="text-muted">{{ $titulacion->nombre_documento_sustento ?? 'N/A' }}</p>
                            </div>

                            <div class="mb-3">
                                <strong>País:</strong>
                                <p class="text-muted">{{ $titulacion->pais ?? 'N/A' }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Sección: Fechas -->
                    <h5 class="bg-light p-2 mb-3 mt-4">Fechas</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <strong>Fecha Solicitud Titulación:</strong>
                                <p class="text-muted">
                                    @if($titulacion->fecha_solicitud_titulacion)
                                        {{ \Carbon\Carbon::parse($titulacion->fecha_solicitud_titulacion)->format('d/m/Y') }}
                                    @else
                                        N/A
                                    @endif
                                </p>
                            </div>

                            <div class="mb-3">
                                <strong>Fecha Titulación:</strong>
                                <p class="text-muted">
                                    @if($titulacion->fecha_titulaciones)
                                        {{ \Carbon\Carbon::parse($titulacion->fecha_titulaciones)->format('d/m/Y') }}
                                    @else
                                        N/A
                                    @endif
                                </p>
                            </div>

                            <div class="mb-3">
                                <strong>Fecha Expedición Título:</strong>
                                <p class="text-muted">
                                    @if($titulacion->fecha_expedicion_titulo)
                                        {{ \Carbon\Carbon::parse($titulacion->fecha_expedicion_titulo)->format('d/m/Y') }}
                                    @else
                                        N/A
                                    @endif
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <strong>Fecha Recepción DGEST:</strong>
                                <p class="text-muted">
                                    @if($titulacion->fecha_recepcion_dgest)
                                        {{ \Carbon\Carbon::parse($titulacion->fecha_recepcion_dgest)->format('d/m/Y') }}
                                    @else
                                        N/A
                                    @endif
                                </p>
                            </div>

                            <div class="mb-3">
                                <strong>Fecha Registro Titulación:</strong>
                                <p class="text-muted">
                                    @if($titulacion->fecha_registro_tit)
                                        {{ \Carbon\Carbon::parse($titulacion->fecha_registro_tit)->format('d/m/Y') }}
                                    @else
                                        N/A
                                    @endif
                                </p>
                            </div>

                            <div class="mb-3">
                                <strong>Fecha Registro D AC:</strong>
                                <p class="text-muted">
                                    @if($titulacion->fecha_registro_d_ac)
                                        {{ \Carbon\Carbon::parse($titulacion->fecha_registro_d_ac)->format('d/m/Y') }}
                                    @else
                                        N/A
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Sección: Jurado -->
                    <h5 class="bg-light p-2 mb-3 mt-4">Jurado</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <strong>Jurado Presidente:</strong>
                                <p class="text-muted">{{ $titulacion->jurado_presidente ?? 'N/A' }}</p>
                            </div>

                            <div class="mb-3">
                                <strong>Jurado Secretario:</strong>
                                <p class="text-muted">{{ $titulacion->jurado_secretario ?? 'N/A' }}</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <strong>Jurado Vocal:</strong>
                                <p class="text-muted">{{ $titulacion->jurado_vocal ?? 'N/A' }}</p>
                            </div>

                            <div class="mb-3">
                                <strong>Jurado Suplente:</strong>
                                <p class="text-muted">{{ $titulacion->jurado_suplente ?? 'N/A' }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Sección: Recepción -->
                    <h5 class="bg-light p-2 mb-3 mt-4">Horario de Recepción</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <strong>Hora Inicio:</strong>
                                <p class="text-muted">{{ $titulacion->hora_inicio_recepcion ?? 'N/A' }}</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <strong>Hora Final:</strong>
                                <p class="text-muted">{{ $titulacion->hora_final_recepcion ?? 'N/A' }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Sección: Documentación -->
                    <h5 class="bg-light p-2 mb-3 mt-4">Documentación</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <strong>Cédula Profesional:</strong>
                                <p class="text-muted">{{ $titulacion->cedula_profecional ?? 'N/A' }}</p>
                            </div>

                            <div class="mb-3">
                                <strong>Tipo Cédula:</strong>
                                <p class="text-muted">{{ $titulacion->tipo_cedula ?? 'N/A' }}</p>
                            </div>

                            <div class="mb-3">
                                <strong>Número Título:</strong>
                                <p class="text-muted">{{ $titulacion->numero_titulo ?? 'N/A' }}</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <strong>Título Entrega:</strong>
                                <p class="text-muted">{{ $titulacion->titulo_entrega ?? 'N/A' }}</p>
                            </div>

                            <div class="mb-3">
                                <strong>Tipo Registro:</strong>
                                <p class="text-muted">{{ $titulacion->tipo_registro ?? 'N/A' }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Sección: Libros y Folios -->
                    <h5 class="bg-light p-2 mb-3 mt-4">Libros y Folios</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <strong>Número Libro Titulación:</strong>
                                <p class="text-muted">{{ $titulacion->numero_libro_tit ?? 'N/A' }}</p>
                            </div>

                            <div class="mb-3">
                                <strong>Número Consecutivo Titulación:</strong>
                                <p class="text-muted">{{ $titulacion->numero_cons_tit ?? 'N/A' }}</p>
                            </div>

                            <div class="mb-3">
                                <strong>Número Foja Titulación:</strong>
                                <p class="text-muted">{{ $titulacion->numero_foja_tit ?? 'N/A' }}</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <strong>Número Libro AC:</strong>
                                <p class="text-muted">{{ $titulacion->numero_libro_ac ?? 'N/A' }}</p>
                            </div>

                            <div class="mb-3">
                                <strong>Número Foja AC:</strong>
                                <p class="text-muted">{{ $titulacion->numero_foja_ac ?? 'N/A' }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Sección: Antecedentes Académicos -->
                    <h5 class="bg-light p-2 mb-3 mt-4">Antecedentes Académicos</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <strong>Periodo Ingreso Preparatoria:</strong>
                                <p class="text-muted">{{ $titulacion->periodo_ingreso_prepa ?? 'N/A' }}</p>
                            </div>

                            <div class="mb-3">
                                <strong>Periodo Egreso Preparatoria:</strong>
                                <p class="text-muted">{{ $titulacion->periodo_egresa_prepa ?? 'N/A' }}</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <strong>Antecedentes:</strong>
                                <p class="text-muted">{{ $titulacion->antecedentes ?? 'N/A' }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Sección: Información Adicional -->
                    <h5 class="bg-light p-2 mb-3 mt-4">Información Adicional</h5>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <strong>Tema:</strong>
                                <p class="text-muted">{{ $titulacion->tema ?? 'N/A' }}</p>
                            </div>

                            <div class="mb-3">
                                <strong>Observaciones:</strong>
                                <p class="text-muted">{{ $titulacion->observaciones ?? 'N/A' }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Información de Auditoría -->
                    <hr class="my-4">
                    <div class="row">
                        <div class="col-md-6">
                            <small class="text-muted">
                                <strong>Fecha de Creación:</strong> 
                                {{ $titulacion->created_at ? $titulacion->created_at->format('d/m/Y H:i') : 'N/A' }}
                            </small>
                        </div>
                        <div class="col-md-6">
                            <small class="text-muted">
                                <strong>Última Actualización:</strong> 
                                {{ $titulacion->updated_at ? $titulacion->updated_at->format('d/m/Y H:i') : 'N/A' }}
                            </small>
                        </div>
                    </div>

                </div>

                <!-- Botones de Acción -->
                <div class="card-footer">
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('titulaciones.index') }}" class="btn btn-secondary">
                            <i class="bi bi-arrow-left"></i> Volver al Listado
                        </a>
                        <div>
                            <a href="{{ route('titulaciones.edit', $titulacion->id) }}" class="btn btn-warning">
                                <i class="bi bi-pencil"></i> Editar
                            </a>
                            <form action="{{ route('titulaciones.destroy', $titulacion->id) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Está seguro de eliminar esta titulación?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="bi bi-trash"></i> Eliminar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection