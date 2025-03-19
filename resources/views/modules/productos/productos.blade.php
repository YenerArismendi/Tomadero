@extends('layouts.app')

@section('title')
    Productos
@endsection
@section('tituloPagina')
    Productos
@endsection
@section('content')

    <div class="container-fluid mt-3">
        <!-- Botón para abrir el modal para registrar una nuevo producto -->
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalCreateProductos">
            Registrar producto <i class="fa-solid fa-plus"></i>
        </button>
        <br>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3">
            @foreach($datosProductos as $data)
                <div class="col">
                    <div class="card" style="width: 18rem; ">
                        <img
                            src="{{ $data->imagen ? asset('storage/' . $data->imagen) : asset('storage/default.jpg') }}"
                            class="card-img-top" alt="Imagen de {{ $data->nombre }}" style="border-radius: 50%">
                        <div class="card-body">
                            <div class="d-flex justify-content-around">
                                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#infoProducto{{ $data->id }}">
                                    <i class="fa-solid fa-circle-info"></i>
                                </button>
                                <!-- Columna para editar la mesa -->
                                <!-- Botón para abrir el modal de edición -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#editProductos{{ $data->id }}">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <form id="deleteForm-{{ $data->id }}"
                                      action="{{ route('productos.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <!-- Botón para eliminar la mesa, con confirmación antes de ejecutar -->
                                    <button type="button" class="btn btn-danger text-start"
                                            onclick="confirmDelete(event, 'deleteForm-{{ $data->id }}')">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                            <!-- Modal de edición (se incluye el archivo de edición para cada mesa) -->
                            @include('modules.productos.updateProductos')
                            @include('modules.productos.detallesProductos')

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @include('modules.productos.createProducto')
    <!-- Componente SweetAlert (alertas) -->
    @include('components.sweetAlert')
@endsection

