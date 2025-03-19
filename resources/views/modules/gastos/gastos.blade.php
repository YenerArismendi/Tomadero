@extends('layouts.app')

@section('title')
    Gastos
@endsection
@section('tituloPagina')
    Gastos
@endsection
@section('content')
    <div class="container-fluid mt-3">
        <div class="card mb-4 row">
            <div class="card-header">
                <i class="fa-solid fa-bag-shopping"></i>
                Creacion de gastos
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3">
                <div class="card mt-3 ms-3 col-3" style="width: 18rem;">
                    <img src="{{ asset('imagenes/botella.png') }}" class="card-img-top" alt="..."
                         style="border-radius: 50%">
                    <div class="card-body text-center">
                        <h5 class="card-title">Compra de productos</h5>
                        <!-- Botón para abrir el modal para registrar una nuevo producto -->
                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#modalGastosProductos">
                            Registrar compra <i class="fa-solid fa-plus"></i>
                        </button>
                    </div>
                </div>

                <div class="card mt-3 ms-3 col-3" style="width: 18rem;">
                    <img src="{{ asset('imagenes/persona.png') }}" class="card-img-top" alt="..."
                         style="border-radius: 50%">
                    <div class="card-body text-center">
                        <h5 class="card-title">Pago de personal</h5>
                        <!-- Botón para abrir el modal para registrar una nuevo producto -->
                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#modalPagoPersonal">
                            Registrar pago <i class="fa-solid fa-plus"></i>
                        </button>
                    </div>
                </div>

                <div class="card mt-3 ms-3 col-3" style="width: 18rem;">
                    <img src="{{ asset('imagenes/arriendo.png') }}" class="card-img-top" alt="..."
                         style="border-radius: 50%">
                    <div class="card-body text-center">
                        <h5 class="card-title">Pago de arriendo</h5>
                        <!-- Botón para abrir el modal para registrar una nuevo producto -->
                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#modalPagoArriendo">
                            Registrar pago <i class="fa-solid fa-plus"></i>
                        </button>
                    </div>
                </div>

                <div class="card mt-3 ms-3 col-3" style="width: 18rem;">
                    <img src="{{ asset('imagenes/servicios.png') }}" class="card-img-top" alt="..."
                         style="border-radius: 50%">
                    <div class="card-body text-center">
                        <h5 class="card-title">Pagos de servicios</h5>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#modalPagoServicios">
                            Registrar pago <i class="fa-solid fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <canvas id="myAreaChart" width="100%" height="30"></canvas>
            </div>
        </div>
    </div>
    @include('modules.gastos.createProductosGastos', ['productos' => $productos])
    @include('modules.gastos.createPagoArriendo')
    @include('modules.gastos.createPagoPersonal', ['pagoPersonal' => $pagoPersonal])
    @include('modules.gastos.pagoServicios')

    <!-- Componente SweetAlert (alertas) -->
    @include('components.sweetAlert')
@endsection



