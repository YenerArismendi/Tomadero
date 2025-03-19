<!-- Modal -->
<!-- Este modal permite editar los registros de las mesas -->
<div class="modal fade" id="modalUpdatePersonal{{ $dataPersonal->id }}" tabindex="-1"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Encabezado del modal -->
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modificación
                    de {{ $dataPersonal->nombre . ' ' . $dataPersonal->apellido}}</h1>
                <!-- Botón para cerrar el modal -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Cuerpo del modal -->
            <div class="modal-body">
                <!-- Formulario para editar los datos de la mesa -->
                <form action="{{ route('personal.update', ['personal' => $dataPersonal->id]) }}" method="POST"
                      enctype="multipart/form-data">
                    @csrf  <!-- Token de seguridad CSRF -->
                    @method('PUT')  <!-- Metodo HTTP PUT, ya que estamos actualizando los datos -->

                    <div class="row">
                        <div class="mb-3 col-6">
                            <label for="nombre" class="col-form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $dataPersonal->nombre }}">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="apellido" class="col-form-label">Apellido:</label>
                            <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $dataPersonal->apellido }}">
                        </div>

                        <div class="mb-3 col-6 mt-4">
                            <select class="form-select" aria-label="Default select example" name="tipo_documento"
                                    required>
                                <option selected>Tipo de documento</option>
                                <option value="CC" @selected($dataPersonal->tipo_documento == 'CC')>Cédula de ciudadania</option>
                                <option value="CE" @selected($dataPersonal->tipo_documento == 'CE') >Cédula de extranjeria</option>
                                <option value="PT" @selected($dataPersonal->tipo_documento == 'PT')>Permiso temporal</option>
                            </select>
                        </div>
                        <div class="mb-3 col-6">
                            <label for="numero_documento" class="col-form-label">Numero de documento:</label>
                            <input type="text" class="form-control" id="numero_documento" name="numero_documento"
                                   value="{{ $dataPersonal->numero_documento }}">
                        </div>

                        <div class="mb-3 col-6">
                            <label for="telefono" class="col-form-label">Telefono:</label>
                            <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $dataPersonal->telefono }}">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="correo" class="col-form-label">Correo electronico:</label>
                            <input type="email" class="form-control" id="correo" name="correo" value="{{ $dataPersonal->correo }}">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="cargo" class="col-form-label">cargo:</label>
                            <input type="text" class="form-control" id="cargo" name="cargo" value="{{ $dataPersonal->cargo }}">
                        </div>
                        <div class="mb-3 col-6 mt-4">
                            <select class="form-select" aria-label="Default select example" name="tipo_pago">
                                <option selected>Tipo de pago</option>
                                <option value="efectivo" @selected($dataPersonal->tipo_pago == 'efectivo')>Efectivo</option>
                                <option value="transferencia" @selected($dataPersonal->tipo_pago == 'transferencia')>transferencia</option>
                            </select>
                        </div>
                        <div class="mb-3 col-6">
                            <label for="cuenta_bancaria" class="col-form-label">Cuenta:</label>
                            <input type="text" class="form-control" id="cuenta_bancaria" name="cuenta_bancaria" value="{{ $dataPersonal->cuenta_bancaria }}">
                        </div>
                        <div class="mb-3 col-6 mt-4">
                            <select class="form-select" aria-label="Default select example" name="estado"
                                    required>
                                <option selected>Estado</option>
                                <option value="1" @selected($dataPersonal->estado == '1')>Activo</option>
                                <option value="2" @selected($dataPersonal->estado == '2') >Inactivo</option>
                            </select>
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


