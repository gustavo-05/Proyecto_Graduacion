
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
            <form id="formColores" name="formColores">
              <input type="hidden" id="idColor" name="idColor" value="">
               <p class="text-danger">* Campos obligatorios.</p>
                <div class="form-group">
                  <label for="txtNombreColores">* Nombre del color</label>
                  <input class="form-control" id="txtNombreColores" name="txtNombreColores" type="text" placeholder="Ingrese el color" required="">
                </div>
                <div class="form-group">
                  <label for="txtDescripciónColores">Descripción</label>
                  <input class="form-control" id="txtDescripciónColores" name="txtDescripciónColores" type="text" placeholder="(opcional)">
                </div>
                <div class="tile-footer">
                    <button id="btnActionForm" class="btn btn-outline-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnTexto">Guardar</span></button>&nbsp;&nbsp;&nbsp;<a class="btn btn-outline-danger" href="#" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>


