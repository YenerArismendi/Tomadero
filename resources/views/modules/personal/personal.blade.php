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
                    <table id="datatablesSimple" class="table table-bordered text-center"
                           style="width:100%">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>documento</th>
                            <th># documento</th>
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
                                <td>{{ $dataPersonal->nombre ?? '' }}</td>
                                <td>{{ $dataPersonal->apellido ?? '' }}</td>
                                <td>{{ $dataPersonal->tipo_documento ?? '' }}</td>
                                <td>{{ $dataPersonal->numero_documento ?? '' }}</td>
                                <td>{{ $dataPersonal->telefono ?? '' }}</td>
                                <td>{{ $dataPersonal->correo ?? '' }}</td>
                                <td>{{ $dataPersonal->cargo ?? '' }}</td>
                                <td>{{ $dataPersonal->estado_text ?? '' }}</td>
                                <td>{{ $dataPersonal->tipo_pago ?? '' }}</td>
                                <td>{{ $dataPersonal->cuenta_bancaria ?? '' }}</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#modalUpdatePersonal{{ $dataPersonal->id }}">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>

            </div>

        </div>
        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                data-bs-target="#modalCreatePersonal">
            Registrar personal <i class="fa-solid fa-plus"></i>
        </button>

        @include('modules.personal.create')
        @include('modules.personal.update')
        <!-- Componente SweetAlert (alertas) -->
    @include('components.sweetAlert')
@endsection




