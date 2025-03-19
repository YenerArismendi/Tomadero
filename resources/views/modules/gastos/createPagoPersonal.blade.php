<!-- Modal -->
<div class="modal fade" id="modalPagoPersonal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Registrar pago personal</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulario para registrar mesas -->
                <form action="{{ route('pagoPersonal') }}" method="POST">
                    @csrf  <!-- Token de seguridad de CSRF -->
                    <select class="form-select" name="personal_id">
                        <option selected disabled>Empleado</option>
                        @foreach ($pagoPersonal as $dataPersonal)
                            <option
                                value="{{ $dataPersonal->id }}">{{ $dataPersonal->nombre . ' ' . $dataPersonal->apellido }}</option>
                        @endforeach
                    </select>
                    <div class="mb-3 mt-4">
                        <select class="form-select" aria-label="Default select example" name="forma_pago">
                            <option selected>Forma de pago</option>
                            <option value="efectivo">Efectivo</option>
                            <option value="transferencia">transferencia</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="total" class="col-form-label">Pago:</label>
                        <input type="text" class="form-control" id="total" name="total" required
                               onkeyup="formatCurrency(this)">
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

