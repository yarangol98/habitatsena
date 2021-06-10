<div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo formulario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formulario" method="POST">
                <div class="modal-body">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre Campaña</label>
                        <input type="text" id="nombreFormulario" name="nombreFormulario" class="form-control">
                        <small class="form-text text-muted">Ingresa el nombre del formulario</small>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Url del Formulario</label>
                        <input type="text" id="urlFormulario"  name="urlFormulario" class="form-control">
                        <small class="form-text text-muted">Ingresa url del formulario</small>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Url de los Resultados</label>
                        <input type="text" id="urlRespuestas" name="urlRespuestas"  class="form-control">
                        <small class="form-text text-muted">Ingresa la url de los resultados</small>
                    </div>

                    <div class="form-group">
                        <label for="exampleTextarea">Descripción</label>
                        <textarea class="form-control" id="descripcion"  name="descripcion" rows="3"></textarea>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" id="algo" class="btn btn-primary" onclick="addRecord()">>Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>

