<!-- Modal -->
<div class="modal fade" id="modalCreateProductos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Registros de productos</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulario para registrar mesas -->
                <form action="{{ route('productos.store') }}" method="POST"  enctype="multipart/form-data">
                    @csrf  <!-- Token de seguridad de CSRF -->
                    <div class="mb-3">
                        <label for="nombre" class="col-form-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="categoria" class="col-form-label">Categoria:</label>
                        <input type="text" class="form-control" id="categoria" name="categoria" required>
                    </div>
                    <div class="mb-3">
                        <label for="tamanio" class="col-form-label">Tamaño:</label>
                        <input type="text" class="form-control" id="tamanio" name="tamanio" required>
                    </div>

                    <select class="form-select" name="estado" aria-label="Default select example">
                        <option selected>Estado del producto</option>
                        <option value="1">Activo</option>
                        <option value="2">Inactivo</option>
                    </select>
                    <div class="mb-3">
                        <label for="imagen" class="form-label">Imagen del producto</label>
                        <input class="form-control" type="file" id="imagen" name="imagen">
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="col-form-label">Descripción:</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

