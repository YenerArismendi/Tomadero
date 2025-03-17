<!-- Modal -->
<div class="modal fade" id="modalGastosProductos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Registros de gastos</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulario para registrar mesas -->
                <form action="{{ route('gastos.store') }}" method="POST">
                    @csrf  <!-- Token de seguridad de CSRF -->
                    <select class="form-select" name="id_producto">
                        <option selected disabled>Selecciona un producto</option>
                        @foreach ($productos as $producto)
                            <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
                        @endforeach
                    </select>
                    <div class="mb-3">
                        <label for="proveedor" class="col-form-label">Proveedor:</label>
                        <input type="text" class="form-control" id="proveedor" name="proveedor" required>
                    </div>
                    <div class="mb-3">
                        <label for="cantidad" class="col-form-label">Cantidad:</label>
                        <input type="text" class="form-control" id="cantidad" name="cantidad" required>
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="col-form-label">Precio:</label>
                        <input type="text" class="form-control" id="precio" name="precio" required>
                    </div>
                    <div class="mb-3">
                        <label for="total" class="col-form-label">Total:</label>
                        <input type="text" class="form-control" id="total" name="total" disabled>
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

