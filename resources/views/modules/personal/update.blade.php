<!-- Modal -->
<!-- Este modal permite editar los registros de las mesas -->
<div class="modal fade" id="modalUpdatePersonal{{ $dataPersonal->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Encabezado del modal -->
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modificación de {{ $dataPersonal->nombre . ' ' . $dataPersonal->apellido}}</h1>
                <!-- Botón para cerrar el modal -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Cuerpo del modal -->
            <div class="modal-body">
                <!-- Formulario para editar los datos de la mesa -->
                <form action="{{ route('productos.update', ['producto' => $dataPersonal->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf  <!-- Token de seguridad CSRF -->
                    @method('PUT')  <!-- Metodo HTTP PUT, ya que estamos actualizando los datos -->

                    <!-- Campo para la modificar el productos si es necesario-->
                    <div class="mb-3">
                        <label for="nombre" class="col-form-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{$dataPersonal->nombre}}" >
                    </div>
                    <div class="mb-3">
                        <label for="categoria" class="col-form-label">Categoria:</label>
                        <input type="text" class="form-control" id="categoria" name="categoria" value="{{$dataPersonal->categoria}}">
                    </div>
                    <div class="mb-3">
                        <label for="tamanio" class="col-form-label">Tamaño:</label>
                        <input type="text" class="form-control" id="tamanio" name="tamanio" value="{{$dataPersonal->tamanio}}">
                    </div>

                    <select class="form-select" name="estado" aria-label="Default select example">
                        <option selected>Estado del producto</option>
                        <option value="1" {{$dataPersonal->estado == 1 ? 'selected' : ''}}>Activo</option>
                        <option value="2" {{$dataPersonal->estado == 2 ? 'selected' : ''}}>Inactivo</option>
                    </select>
                    <div class="mb-3">
                        <label for="imagen" class="form-label">Imagen del producto</label>
                        <input class="form-control" type="file" id="imagen" name="imagen">
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="col-form-label">Descripción:</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion">
                    </div>

                    <!-- Pie del modal -->
                    <div class="modal-footer">
                        <!-- Botón para cerrar el modal sin guardar cambios -->
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <!-- Botón para guardar los cambios -->
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


