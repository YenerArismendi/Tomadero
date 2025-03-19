<!-- Modal -->
<div class="modal fade" id="modalPagoServicios" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Pago de servicios</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulario para registrar mesas -->
                <form action="{{ route('pagoServicios') }}" method="POST">
                    @csrf  <!-- Token de seguridad de CSRF -->
                    <select class="form-select" name="tipo_servicio" required>
                        <option selected disabled>Selecciona un producto</option>
                        <option value="Agua">Agua</option>
                        <option value="Luz">Luz</option>
                    </select>
                    <div class="mb-3">
                        <label for="fecha" class="col-form-label">Mes:</label>
                        <input type="date" class="form-control" id="fecha" name="fecha" required>
                    </div>
                    <div class="mb-3">
                        <label for="monto" class="col-form-label">Total pagado:</label>
                        <input type="text" class="form-control" id="monto" name="monto" required onkeyup="formatCurrency(this)">
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

