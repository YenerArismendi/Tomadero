<!-- Modal -->
<div class="modal fade" id="modalCreateMesas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Registrar mesas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulario para registrar mesas -->
                <form action="{{ route('mesas.store') }}" method="POST">
                    @csrf  <!-- Token de seguridad de CSRF -->
                    <div class="row">
                        <div class="mb-3 col-6">
                            <label for="numero_mesa" class="col-form-label"># de mesa:</label>
                            <input type="number" class="form-control" id="numero_mesa" name="numero_mesa" required>
                        </div>
                        <div class="mb-3 col-6">
                            <label for="descripcion" class="col-form-label">descripción:</label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion">
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


