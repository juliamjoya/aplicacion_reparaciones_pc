<!-- Modal -->
<div class="modal fade" id="modal_registro_recepcion" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="titulo_modal_recepcion"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" id="formulario_modal_recepcion">
                <div class="modal-body">
                    <input type="hidden" name="id" id="id">

                    <div class="mb-3">
                        <label for="numero_recibido" class="form-label">Número de recibido</label>
                        <input type="text" name="numero_recibido" id="numero_recibido" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="estado_pc" class="form-label">Estado del ordenador</label>
                        <input type="text" name="estado_pc" id="estado_pc" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="marca_pc" class="form-label">Marca del ordenador</label>
                        <input type="text" name="marca_pc" id="marca_pc" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="nombre_cliente" class="form-label">Nombre del cliente</label>
                        <input type="text" name="nombre_cliente" id="nombre_cliente" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="telefono_cliente" class="form-label">Teléfono del cliente</label>
                        <input type="text" name="telefono_cliente" id="telefono_cliente" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="codigo_operario" class="form-label">Codigo del operario</label>
                        <input type="text" name="codigo_operario" id="codigo_operario" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" name="action" id="#" value="add" class="btn btn-primary">Guardar
                        registro</button>
                </div>
            </form>
        </div>
    </div>
</div>