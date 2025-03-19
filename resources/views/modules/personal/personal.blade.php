@extends('layouts.app')

@section('title')
    Personal
@endsection
@section('tituloPagina')
    Personal
@endsection
@section('content')
    <div class="container-fluid mt-3">
        <div class="card mb-4 row">
            <div class="card-header">
                <i class="fa-solid fa-user"></i>
                Personal registrado
            </div>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <div class="table-responsive">
                        <table id="datatablesSimple" class="table table-bordered text-center"
                               style="width:100%">
                            <thead>
                            <tr>
                                <th>documento</th>
                                <th># documento</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Telefono</th>
                                <th>Correo</th>
                                <th>Cargo</th>
                                <th>Estado</th>
                                <th>Tipo de pago</th>
                                <th>Cuenta bancaria</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            @foreach($personal as $dataPersonal)
                                <tbody>
                                <tr>
                                    <td>{{ $dataPersonal->tipo_documento ?? '' }}</td>
                                    <td>{{ $dataPersonal->numero_documento ?? '' }}</td>
                                    <td>{{ $dataPersonal->nombre ?? '' }}</td>
                                    <td>{{ $dataPersonal->apellido ?? '' }}</td>
                                    <td>{{ $dataPersonal->telefono ?? '' }}</td>
                                    <td>{{ $dataPersonal->correo ?? '' }}</td>
                                    <td>{{ $dataPersonal->cargo ?? '' }}</td>
                                    <td>{{ $dataPersonal->estado_text ?? '' }}</td>
                                    <td>{{ $dataPersonal->tipo_pago ?? '' }}</td>
                                    <td>{{ $dataPersonal->cuenta_bancaria ?? '' }}</td>
                                    <td class="d-flex justify-content-around">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#modalUpdatePersonal{{ $dataPersonal->id }}">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>
                                        @include('modules.personal.update')
                                        <form id="deleteForm-{{ $dataPersonal->id }}"
                                              action="{{ route('personal.destroy', $dataPersonal->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <!-- Botón para eliminar la mesa, con confirmación antes de ejecutar -->
                                            <button type="button" class="btn btn-danger text-start"
                                                    onclick="confirmDelete(event, 'deleteForm-{{ $dataPersonal->id }}')">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>

            </div>

        </div>
        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                data-bs-target="#modalCreatePersonal">
            Registrar personal <i class="fa-solid fa-plus"></i>
        </button>

        @include('modules.personal.create')
        <!-- Componente SweetAlert (alertas) -->
    @include('components.sweetAlert')
@endsection




