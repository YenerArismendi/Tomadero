@extends('layouts.app')

@section('title')
    Mesa
@endsection
@section('tituloPagina')
    Mesa
@endsection
@section('content')
    <div class="container-fluid mt-3">
        <div class="card mb-4 row">
            <div class="card-header">
                <i class="fa-solid fa-user"></i>
                Registrar mesas
            </div>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <div class="table-responsive">
                        <table id="datatablesSimple" class="table table-bordered text-center"
                               style="width:100%">
                            <thead>
                            <tr>
                                <th># de mesa</th>
                                <th>Estado</th>
                                <th>Descripción</th>
                                <th>Fecha de creación</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($mesas as $dataMesa)
                                <tr>
                                    <td>{{ $dataMesa->numero_mesa }}</td>
                                    <td>{{ $dataMesa->estado_text }}</td>
                                    <td>{{ $dataMesa->descripcion }}</td>
                                    <td>{{ $dataMesa->created_at }}</td>
                                    <td class="d-flex justify-content-around">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#modalUpdateMesas{{ $dataMesa->id }}">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>
                                        @include('modules.mesas.update')
                                        {{--                                        <form id="deleteForm-{{ $dataPersonal->id }}"--}}
                                        {{--                                              action="{{ route('personal.destroy', $dataPersonal->id) }}" method="POST">--}}
                                        {{--                                            @csrf--}}
                                        {{--                                            @method('DELETE')--}}
                                        {{--                                            <!-- Botón para eliminar la mesa, con confirmación antes de ejecutar -->--}}
                                        {{--                                            <button type="button" class="btn btn-danger text-start"--}}
                                        {{--                                                    onclick="confirmDelete(event, 'deleteForm-{{ $dataPersonal->id }}')">--}}
                                        {{--                                                <i class="fa-solid fa-trash"></i>--}}
                                        {{--                                            </button>--}}
                                        {{--                                        </form>--}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>
        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                data-bs-target="#modalCreateMesas">
            Registrar mesas <i class="fa-solid fa-plus"></i>
        </button>

        @include('modules.mesas.create')
        <!-- Componente SweetAlert (alertas) -->
    @include('components.sweetAlert')
@endsection




