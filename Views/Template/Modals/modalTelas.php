<!-- Modal -->
<div class="modal fade" id="modalFromTelas" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header headerRegistro">
        <h5 class="modal-title" id="tituloModal">Registro de nueva tela</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form id="formTelas" name="formTelas">
              <input type="hidden" id="idTelas" name="idTelas" value="">
                <div class="form-group">
                    <label for="listColorTelas">Color</label>
                    <select class="form-control" id="listColorTelas" name="lisColorTelas" required>
                      
                    </select>
                </div>
                <div class="form-group">
                  <label for="intCantidadTelas">Cantidad</label>
                  <input class="form-control" id="intCantidadTelas" name="intCantidadTelas" type="int" placeholder="Ingrese la cantidad de idTelas" required="">
                </div>
                <div class="form-group">
                  <label for="txtDescripciónTelas">Descripción</label>
                  <input class="form-control" id="txtDescripciónTelas" name="txtDescripciónTelas" type="text" placeholder="(Opcional)">
                </div>
                
                <div class="tile-footer">
                    <button id="btnActionForm" class="btn btn-outline-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnTexto">Guardar</span></button>&nbsp;&nbsp;&nbsp;<a class="btn btn-outline-danger" href="#" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>

