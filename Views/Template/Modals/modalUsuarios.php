<!-- Modal -->
<div class="modal fade" id="modalFromUsuario" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header headerRegistro">
        <h5 class="modal-title" id="tituloModal">Registro de nuevo usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form id="formUsuario" name="formUsuario">
              <input type="hidden" id="idUsuario" name="idUsuario" value="">
               <p class="text-danger">* Campos obligatorios.</p>
                <div class="form-group">
                  <label for="txtUsuario">* Ingrese su usuario</label>
                  <input class="form-control" id="txtUsuario" name="txtUsuario" type="text" placeholder="Ingrese su usuario" required="">
                </div>
                <div class="form-group">
                  <label for="txtContraseña">* Ingrese su contraseña</label>
                  <input class="form-control" id="txtContraseña" name="txtContraseña" type="password" placeholder="Ingrese su contraseña">
                </div>
                <div class="form-group">
                    <label for="listEstado">* Estado</label>
                    <select class="form-control" id="listEstado" name="listEstado" required="">
                      <option value="1">Activo</option>
                      <option value="2">Inactivo</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="listRol">* Rol</label>
                    <select class="form-control" id="listRol" name="listRol" required>
                      
                    </select>
                </div>
                <div class="form-group">
                    <label for="listPersonal">* Personal Asociado</label>
                    <select class="form-control" id="listPersonal" name="lisPersonal" required>
                      
                    </select>
                </div>
                <div class="tile-footer">
                    <button id="btnActionForm" class="btn btn-outline-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnTexto">Guardar</span></button>&nbsp;&nbsp;&nbsp;<a class="btn btn-outline-danger" href="#" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>

