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
                <i class="fa-solid fa-sack-dollar"></i>
                Registro de gastos
            </div>
            <div class="accordion accordion-flush mb-4" id="accordionFlushExample">
                <div class="container mt-4">
                    <div class="card text-center">
                        <div class="card-header">
                            <ul class="nav nav-pills card-header-pills" id="myTab">
                                <li class="nav-item">
                                    <a class="nav-link active" id="tab1-tab" data-bs-toggle="pill" href="#tab1">Compra
                                        de productos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab2-tab" data-bs-toggle="pill" href="#tab2">Pago de
                                        personal</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab3-tab" data-bs-toggle="pill" href="#tab3">Pago de
                                        arriendo</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab3-tab" data-bs-toggle="pill" href="#tab4">Pago de
                                        servicios</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab1">
                                    <table id="datatablesSimple"
                                           class="table table-striped table-bordered text-center"
                                           style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Nombre producto</th>
                                            <th>Proveedor</th>
                                            <th>Cantidad</th>
                                            <th>Precio</th>
                                            <th>Total</th>
                                            <th>Fecha</th>
                                            <th>Descripción</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($compraProductos as $dataProductos)
                                            <tr>
                                                <td>{{ $dataProductos->producto->nombre ?? '' }}</td>
                                                <td>{{ $dataProductos->proveedor ?? '' }}</td>
                                                <td>{{ $dataProductos->cantidad ?? '' }}</td>
                                                <td>${{ number_format($dataProductos->precio, 3, ',', '.') }}</td>
                                                <td>${{ number_format($dataProductos->total, 3, ',', '.') }}</td>
                                                <td>{{ $dataProductos->created_at ?? '' }}</td>
                                                <td>{{ $dataProductos->descripcion ?? '' }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="tab2">
                                    <table id="datatablesPersonal" class="table table-striped table-bordered"
                                           style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Forma de pago</th>
                                            <th>Total</th>
                                            <th>Fecha de pago</th>
                                            <th>Descripcion</th>
                                        </tr>
                                        </thead>
                                        @foreach($pagoPersonal as $dataPagoPersonal) @endforeach
                                        <tbody>
                                        <tr>
                                            <td>{{ $dataPagoPersonal->personal->nombre . ' ' . $dataPagoPersonal->personal->apellido}}</td>
                                            <td>{{ $dataPagoPersonal->forma_pago }}</td>
                                            <td>${{ number_format ($dataPagoPersonal->total, 3, ',', '.' )}}</td>
                                            <td>{{ $dataPagoPersonal->created_at }}</td>
                                            <td>{{ $dataPagoPersonal->descripcion }}</td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>
                                <div class="tab-pane fade" id="tab3">
                                    <table id="datatablesArriendo" class="table table-striped table-bordered"
                                           style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Mes pagado</th>
                                            <th>Monto</th>
                                            <th>Descripcion</th>
                                            <th>Fecha de pago</th>
                                        </tr>
                                        </thead>
                                        @foreach($pagoArriendo as $dataArriendo)
                                            <tbody>
                                            <tr>
                                                <td>{{ \Carbon\Carbon::parse($dataArriendo->fecha_pago)->translatedFormat('F') ?? '' }}</td>
                                                <td>${{ number_format($dataArriendo->monto, 3, ',', '.') }}</td>
                                                <td>{{ $dataArriendo->descripcion ?? '' }}</td>
                                                <td>{{ $dataArriendo->created_at ?? '' }}</td>
                                            </tr>
                                            </tbody>
                                        @endforeach
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="tab4">
                                    <table id="datatablesServicios" class="table table-striped table-bordered"
                                           style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Mes pagado</th>
                                            <th>tipo de servicio</th>
                                            <th>Monto pagado</th>
                                            <th>Fecha de pago</th>
                                            <th>Descripción</th>
                                        </tr>
                                        </thead>
                                        @foreach($pagoServicios as $dataServicios)
                                            <tbody>
                                            <tr>
                                                <td>{{ \Carbon\Carbon::parse($dataServicios->fecha)->translatedFormat('F') ?? '' }}</td>
                                                <td>{{ $dataServicios->tipo_servicio }}</td>
                                                <td>${{ number_format($dataServicios->monto, 3, ',', '.') }}</td>
                                                <td>{{ $dataServicios->created_at}}</td>
                                                <td>{{ $dataServicios->descripcion}}</td>
                                            </tr>
                                            </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


