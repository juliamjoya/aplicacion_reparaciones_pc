<!-- Modal -->
<div class="modal fade" id="modal_registro_operacion" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="titulo_modal_operacion"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" id="formulario_modal_operacion">
                <div class="modal-body">
                    <input type="hidden" name="id" id="id">

                    <div class="mb-3">
                        <label for="numero_recibido" class="form-label">Número de recibido</label>
                        <input type="text" name="numero_recibido" id="numero_recibido" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="descripcion_fallos_pc" class="form-label">Descripción fallos encontrados</label>
                        <input type="text" name="descripcion_fallos_pc" id="descripcion_fallos_pc" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="repuestos_reparacion" class="form-label">Repuestos a utilizar</label>
                        <input type="text" name="repuestos_reparacion" id="repuestos_reparacion" class="form-control">
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