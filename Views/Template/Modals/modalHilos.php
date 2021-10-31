<!-- Modal -->
<div class="modal fade" id="modalFromHilos" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header headerRegistro">
        <h5 class="modal-title" id="tituloModal">Registro de nuevo Hilo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form id="formHilo" name="formHilo">
              <input type="hidden" id="idHilos" name="idHilos" value="">
                <div class="form-group">
                    <label for="listColorHilos">Color</label>
                    <select class="form-control" id="listColorHilos" name="lisColorHilos" required>
                      
                    </select>
                </div>
                <div class="form-group">
                  <label for="txtCódigoHilos">Código de Color</label>
                  <input class="form-control" id="txtCódigoHilos" name="txtCódigoHilos" type="text" placeholder="Ingrese el código de hilo" required="">
                </div>
                <div class="form-group">
                    <label for="listTipoHilos">Tipo de hilo</label>
                    <select class="form-control" id="listTipoHilos" name="lisTipoHilos" required>
                      
                    </select>
                </div>
                <div class="form-group">
                  <label for="intCantidadHilos">Cantidad</label>
                  <input class="form-control" id="intCantidadHilos" name="intCantidadHilos" type="int" placeholder="Ingrese la cantidad de Telas" required="">
                </div>
                <div class="form-group">
                  <label class="control-label" for="txtDescripciónHilos">Descripción</label>
                  <input class="form-control" id="txtDescripciónHilos" name="txtDescripciónHilos" type="text" placeholder="(Opcional)">
                </div>
                <div class="tile-footer">
                    <button id="btnActionForm" class="btn btn-outline-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnTexto">Guardar</span></button>&nbsp;&nbsp;&nbsp;<a class="btn btn-outline-danger" href="#" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>

