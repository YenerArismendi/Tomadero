<!-- Modal -->
<div class="modal fade" id="modalCreatePersonal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Registrar personal</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulario para registrar mesas -->
                <form action="{{ route('personal.store') }}" method="POST">
                    @csrf  <!-- Token de seguridad de CSRF -->
                    <div class="row">
                        <div class="mb-3 col-6">
                            <label for="nombre" class="col-form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="mb-3 col-6">
                            <label for="apellido" class="col-form-label">Apellido:</label>
                            <input type="text" class="form-control" id="apellido" name="apellido" required>
                        </div>

                        <div class="mb-3 col-6">
                            <label for="tipo_documento" class="col-form-label">Tipo de documento:</label>
                            <input type="text" class="form-control" id="tipo_documento" name="tipo_documento" required>
                        </div>
                        <div class="mb-3 col-6">
                            <label for="numero_documento" class="col-form-label">Numero de documento:</label>
                            <input type="text" class="form-control" id="numero_documento" name="numero_documento"
                                   required>
                        </div>

                        <div class="mb-3 col-6">
                            <label for="telefono" class="col-form-label">Telefono:</label>
                            <input type="text" class="form-control" id="telefono" name="telefono" required>
                        </div>
                        <div class="mb-3 col-6">
                            <label for="correo" class="col-form-label">Correo electronico:</label>
                            <input type="text" class="form-control" id="correo" name="correo">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="cargo" class="col-form-label">cargo:</label>
                            <input type="text" class="form-control" id="cargo" name="cargo" required>
                        </div>
                        <select class="form-select" aria-label="Default select example" name="tipo_pago">
                            <option selected>Tipo de pago</option>
                            <option value="efectivo">Efectivo</option>
                            <option value="transferencia">transferencia</option>
                        </select>
                        <div class="mb-3 col-6">
                            <label for="cuenta_bancaria" class="col-form-label">Cuenta:</label>
                            <input type="text" class="form-control" id="cuenta_bancaria" name="cuenta_bancaria">
                        </div>
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

