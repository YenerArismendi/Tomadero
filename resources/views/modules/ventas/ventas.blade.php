@extends('layouts.app')

@section('title')
    Ventas
@endsection
@section('tituloPagina')
    Ventas
@endsection
@section('content')
    <div class="container-fluid mt-3">
        <div class="row">
            @foreach($mesas as $data)
                <div class="col-md-3 mb-3">
                    <div class="card" style="width: 18rem;">
                        <div class="contenido">
                            <h1>Mesa # {{ $data->numero_mesa }}</h1>
                        </div>
                        <div class="card-body">
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#modalCreatePersonal">
                                Registrar venta <i class="fa-solid fa-plus"></i>
                            </button>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#infoProducto">
                                <i class="fa-solid fa-circle-info"></i>
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Componente SweetAlert (alertas) -->
    @include('components.sweetAlert')
@endsection





