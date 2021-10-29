<!-- Modal -->
<div class="modal fade" id="modalFromPersonal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header headerRegistro">
        <h5 class="modal-title" id="tituloModal">Registro de nuevo Personal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form id="formPersonal" name="formPersonal">
              <input type="hidden" id="idPersonal" name="idPersonal" value="">
               <p class="text-primary">Campos obligatorios.</p>
                <div class="form-group">
                  <label for="txtNombrePersonal">Nombre</label>
                  <input class="form-control" id="txtNombrePersonal" name="txtNombrePersonal" type="text" placeholder="Ingrese su nombre" required="">
                </div>
                <div class="form-group">
                  <label for="txtApellidoPersonal">Apellido</label>
                  <input class="form-control" id="txtApellidoPersonal" name="txtApellidoPersonal" type="text" placeholder="Ingrese su apellido" required="">
                </div>
                <div class="form-group">
                  <label for="txtDirecciónPersonal">Dirección</label>
                  <input class="form-control" id="txtDirecciónPersonal" name="txtDirecciónPersonal" type="text" placeholder="Ingrese su dirección" required="">
                </div>
                <div class="form-group">
                  <label for="intTeléfonoPersonal">Teléfono</label>
                  <input class="form-control" id="intTeléfonoPersonal" name="intTeléfonoPersonal" type="int" placeholder="Ingrese su número de teléfono" required="">
                </div>
                <div class="tile-footer">
                    <button id="btnActionForm" class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnTexto">Guardar</span></button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>

