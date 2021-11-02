
<!-- Modal -->
<div class="modal fade" id="modalFromColores" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header headerRegistro">
        <h5 class="modal-title" id="tituloModal">Registro de nuevos colores</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--FOrumulario para agregar diseño-->
      <div class="modal-body">
            <form id="formColor" name="formColor">
              <input type="hidden" id="idColor" name="idColor" value="">
               <p class="text-danger">Campos obligatorios *</p>
                <div class="form-group">
                  <label class="control-label" for="txtNombreColores">Nombre del color</label><span class="text-danger"> *</span>
                  <input class="form-control" id="txtNombreColores" name="txtNombreColores" type="text" placeholder="Ingrese el color" required="">
                </div>
                <div class="form-group">
                  <label class="control-label">Descripción</label>
                  <textarea class="form-control" id="txtDescripciónColores" name="txtDescripciónColores" rows="2" placeholder="Opcional"></textarea>
                </div>
                <div class="tile-footer">
                    <button id="btnActionForm" class="btn btn-outline-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnTexto">Guardar</span></button>&nbsp;&nbsp;&nbsp;<a class="btn btn-outline-danger" href="#" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>


