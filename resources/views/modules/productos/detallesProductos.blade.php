<!-- Modal -->
<!-- Este modal permite editar los registros de las mesas -->
<div class="modal fade" id="infoProducto{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Encabezado del modal -->
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Detalles de pedido</h1>
                <!-- Botón para cerrar el modal -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Cuerpo del modal -->
            <div class="modal-body">
                <div class="container mt-3">
                    <!-- Tabla con las mesas -->
                    <table id="datatablesSimple" class="table table-bordered">
                        <thead>
                        <tr>
                            <!-- Definición de las cabeceras de la tabla -->
                            <th class="text-center">Nombre</th>
                            <th class="text-center">Tamaño</th>
                            <th class="text-center">Categoria</th>
                            <th class="text-center">Estado</th>
                            <th class="text-center">Descripción</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <!-- Mostramos los valores de cada mesa -->
                                <td class="text-center">{{$data->nombre ?? ''}}</td>
                                <td class="text-center">{{$data->tamanio ?? ''}}</td>
                                <td class="text-center">{{$data->categoria ?? ''}}</td>
                                <td class="text-center">{{$data->estado_text ?? ''}}</td>
                                <td class="text-center">{{$data->descripcion ?? ''}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Pie del modal -->
                <div class="modal-footer">
                    <!-- Botón para cerrar el modal sin guardar cambios -->
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>


