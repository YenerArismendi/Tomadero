<!-- Modal -->
<!-- Este modal permite editar los registros de las mesas -->
<div class="modal fade" id="modalUpdateMesas{{ $dataMesa->id }}" tabindex="-1"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Encabezado del modal -->
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modificación
                    de mesa #{{ $dataMesa->numero_mesa}}</h1>
                <!-- Botón para cerrar el modal -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Cuerpo del modal -->
            <div class="modal-body">
                <!-- Formulario para editar los datos de la mesa -->
                <form action="{{ route('mesas.update', ['mesa' => $dataMesa->id]) }}" method="POST"
                      enctype="multipart/form-data">
                    @csrf  <!-- Token de seguridad CSRF -->
                    @method('PUT')  <!-- Metodo HTTP PUT, ya que estamos actualizando los datos -->

                    <div class="row">
                        <div class="mb-3">
                            <label for="numero_mesa" class="col-form-label"># de mesa:</label>
                            <input type="text" class="form-control" id="numero_mesa" name="numero_mesa" value="{{ $dataMesa->numero_mesa }}">
                        </div>
                        <div class="mb-3 mt-4">
                            <select class="form-select" aria-label="Default select example" name="estado"
                                    required>
                                <option selected>Estado</option>
                                <option value="1" @selected($dataMesa->estado == '1')>Activo</option>
                                <option value="2" @selected($dataMesa->estado == '2') >Inactivo</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="col-form-label">Descripción:</label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ $dataMesa->descripcion }}">
                        </div>

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



