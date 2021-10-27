<!-- Modal -->
<div class="modal fade" id="modalFromRoles" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header headerRegistro">
        <h5 class="modal-title" id="tituloModal">Registro de nuevo rol</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="tile">
          <div class="tile-body">
            <form id="formRol" name="formRol">
              <input type="hidden" id="idRol" name="idRol" value="">
                <div class="form-group">
                  <label class="control-label">Nombre del Rol</label>
                  <input class="form-control" id="txtNombre" name="txtNombre" type="text" placeholder="Ingrese el nombre el rol" required="">
                </div>
                <div class="form-group">
                  <label class="control-label">Descripción</label>
                  <textarea class="form-control" id="txtDescripción" name="txtDescripción" rows="2" placeholder="Ingrese una descripción del rol" required=""></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleSelect1">Estado</label>
                    <select class="form-control" id="listEstado" name="listEstado" required="">
                      <option value="1">Activo</option>
                      <option value="2">Inactivo</option>
                    </select>
                </div>
                <div class="tile-footer">
                    <button id="btnActionForm" class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnTexto">Guardar</span></button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
                </div>
            </form>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>

<!--Modal Permisos-->
<div class="modal fade modalPermisos" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
          <h5 class="modal-title h4">Roles de usuarios, Permisos</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>

        <div class ="modal-body">

          <div class="col-md-12">
            <div class="tile">
              <form action="" id="formPermisos" name="formPermisos">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Vistas</th>
                        <th>Consultar</th>
                        <th>Insertar</th>
                        <th>Actualizar</th>
                        <th>Eliminar</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Usuario</td>
                        <td></td>
                        <td>
                          <div class="toggle lg">
                            <label>
                              <input type="checkbox"><span class="button-indecator"></span>
                            </label>
                          </div>
                        </td>
                        <td>
                          <div class="toggle lg">
                            <label>
                              <input type="checkbox"><span class="button-indecator"></span>
                            </label>
                          </div>
                        </td>
                        <td>
                          <div class="toggle lg">
                            <label>
                              <input type="checkbox"><span class="button-indecator"></span>
                            </label>
                          </div>
                        </td>
                        <td>
                          <div class="toggle lg">
                            <label>
                              <input type="checkbox"><span class="button-indecator"></span>
                            </label>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="text-center">
                  <button class="btn btn-outline-success" type="submit">Guardar</button>
                  <button class="btn btn-outline-danger" type="button" data-dismiss="modal">Cancelar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>