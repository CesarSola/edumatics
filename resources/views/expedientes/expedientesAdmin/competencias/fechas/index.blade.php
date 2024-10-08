@extends('adminlte::page')

@section('title', 'Mis Usuarios')

@section('content_header')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="text-primary">Mis Usuarios</h1>
                    <a href="{{ route('usuariosAdmin.index') }}" class="btn btn-primary">Regresar a Expedientes</a>
                </div>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="container">
        <!-- Mostrar el enlace al calendario solo una vez -->
        @php
            $calendarioMostrado = false; // Variable de control
        @endphp

        @foreach ($usuarios as $usuario)
            @foreach ($usuario->estandares as $estandar)
                @if (!$calendarioMostrado)
                    <!-- Verificar si ya se mostró el enlace -->
                    <div class="mb-4">
                        <a href="{{ route('calendario.show', ['competenciaId' => $estandar->id]) }}" class="btn btn-primary">
                            <i class="fas fa-calendar-alt"></i> Mi calendario
                        </a>
                    </div>
                    @php
                        $calendarioMostrado = true; // Marcar como mostrado
                    @endphp
                @endif
            @endforeach
        @endforeach

        <!-- Sección de Usuarios -->
        <div class="row">
            <div class="col-12 mb-4">
                <div class="card shadow-lg border-success rounded-lg">
                    <div class="card-header bg-success text-white">
                        <h5 class="card-title mb-0">Usuarios Asignados</h5>
                    </div>
                    <div class="card-body">
                        @if ($usuarios->isEmpty())
                            <div class="alert alert-info" role="alert">
                                No hay usuarios asignados a este evaluador.
                            </div>
                        @else
                            @php
                                // Usamos una colección para almacenar los IDs de usuarios que ya hemos mostrado
                                $usuariosMostrados = collect();
                            @endphp

                            @foreach ($usuarios as $usuario)
                                @if (!$usuariosMostrados->contains($usuario->id))
                                    @php
                                        // Agregamos el ID del usuario actual a la colección para evitar mostrarlo nuevamente
                                        $usuariosMostrados->push($usuario->id);
                                    @endphp
                                    <div class="mb-4">
                                        <div class="row">
                                            <!-- Datos personales del usuario en el lado izquierdo -->
                                            <div class="col-md-5">
                                                <div class="border rounded p-3 bg-light">
                                                    <h6 class="text-primary mb-2"><i class="fas fa-user"></i> Datos del
                                                        Usuario:</h6>
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item"><strong>Nombres:</strong>
                                                            {{ $usuario->name }} {{ $usuario->secondName }}</li>
                                                        <li class="list-group-item"><strong>Apellidos:</strong>
                                                            {{ $usuario->paternalSurname }} {{ $usuario->maternalSurname }}
                                                        </li>
                                                        <li class="list-group-item"><strong>Matrícula:</strong>
                                                            {{ $usuario->matricula }}</li>
                                                        <li class="list-group-item"><strong>Email:</strong>
                                                            {{ $usuario->email }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Estándares en el lado derecho -->
                                            <div class="col-md-7">
                                                <div class="border rounded p-3 bg-light">
                                                    <h6 class="text-primary mb-2"><i class="fas fa-tasks"></i> Estándares
                                                        Asignados:</h6>
                                                    <ul class="list-group">
                                                        @foreach ($usuario->estandares as $estandar)
                                                            <li
                                                                class="list-group-item d-flex justify-content-between align-items-center">
                                                                <div class="mr-2">
                                                                    <span
                                                                        class="badge badge-info">{{ $estandar->numero }}</span>
                                                                    - {{ $estandar->name }}
                                                                </div>
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <div class="mr-2">
                                                                        <!-- Añadimos un margen a la derecha del primer div -->
                                                                        @if ($estandar->fechas->isNotEmpty())
                                                                            <span class="badge badge-success">Fechas y
                                                                                Horarios Asignados</span>
                                                                        @else
                                                                            <button class="btn btn-success btn-sm"
                                                                                data-toggle="modal"
                                                                                data-target="#modalAgregarFechas{{ $usuario->id }}-{{ $estandar->id }}">
                                                                                <i class="fas fa-calendar-plus"></i> Agregar
                                                                                Fechas
                                                                            </button>
                                                                        @endif
                                                                    </div>
                                                                    <div class="mr-2">
                                                                        @if ($estandar->calificacion_asignada)
                                                                            <span class="badge badge-info">Calificaciones
                                                                                Asignadas</span>
                                                                        @else
                                                                            <button type="button"
                                                                                class="btn btn-success btn-sm"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#calificacionModal"
                                                                                data-user-id="{{ $usuario->id }}"
                                                                                data-estandar-id="{{ $estandar->id }}">
                                                                                Asignar Calificaciones
                                                                            </button>
                                                                        @endif
                                                                    </div>
                                                                    <div class="mr-2">
                                                                        <!-- Botón para abrir el modal -->
                                                                        <button class="btn btn-warning btn-sm"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#verCalificacionesModal{{ $usuario->id }}-{{ $estandar->id }}">
                                                                            Ver Calificaciones
                                                                        </button>

                                                                    </div>
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="my-4"> <!-- Separador entre usuarios -->
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('expedientes.expedientesAdmin.competencias.fechas.agregar-fechas')
    @include('expedientes.expedientesAdmin.competencias.calificaciones.show')
    @include('expedientes.expedientesAdmin.competencias.fechas.verCalificaciones.show')
@stop


@section('css')
    <style>
        .card {
            border-radius: 12px;
            overflow: hidden;
        }

        .card-header {
            border-bottom: 2px solid #238500;
        }

        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }

        .border {
            border-color: #dee2e6;
        }

        .rounded-lg {
            border-radius: 0.5rem;
        }

        .alert-info {
            border-radius: 0.5rem;
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }

        .btn-warning {
            color: white
        }
    </style>
@stop

@section('js')
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Verificar si hay un mensaje de éxito en la sesión
            @if (session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Éxito',
                    text: '{{ session('success') }}',
                    confirmButtonText: 'OK'
                });
            @endif
        });
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@stop
