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
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                            Compra de productos
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                         data-bs-parent="#accordionFlushExample">
                        <table id="datatablesSimple" class="table table-striped table-bordered text-center"
                               style="width:100%">
                            <thead>
                            <tr>
                                <th>Nombre producto</th>
                                <th>Proveedor</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>Total</th>
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
                                    <td>{{ $dataProductos->descripcion ?? '' }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                            Pago de personal
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                         data-bs-parent="#accordionFlushExample">
                        <table id="datatablesSimple" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Donna Snider</td>
                                <td>Customer Support</td>
                                <td>New York</td>
                                <td>27</td>
                                <td>2011-01-25</td>
                                <td>$112,000</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                            Pago de arriendo
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                         aria-labelledby="flush-headingThree"
                         data-bs-parent="#accordionFlushExample">
                        <table id="datatablesSimple" class="table table-striped table-bordered" style="width:100%">
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
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFour" aria-expanded="false"
                                aria-controls="flush-collapseFour">
                            Pago de servicios
                        </button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                         data-bs-parent="#accordionFlushExample">
                        <table id="datatablesSimple" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Donna Snider</td>
                                <td>Customer Support</td>
                                <td>New York</td>
                                <td>27</td>
                                <td>2011-01-25</td>
                                <td>$112,000</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection


