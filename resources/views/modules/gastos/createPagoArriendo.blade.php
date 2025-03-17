<!-- Modal -->
<div class="modal fade" id="modalPagoArriendo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Registrar pago arriendo</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulario para registrar mesas -->
                <form action="{{ route('pagoArriendo') }}" method="POST">
                    @csrf  <!-- Token de seguridad de CSRF -->
                    <div class="mb-3">
                        <label for="fecha_pago" class="col-form-label">Mes:</label>
                        <input type="date" class="form-control" id="fecha_pago" name="fecha_pago" required>
                    </div>
                    <div class="mb-3">
                        <label for="monto" class="col-form-label">Pago:</label>
                        <input type="text" class="form-control" id="precio" name="monto" required onkeyup="formatCurrency(this)">
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

