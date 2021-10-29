<?php 
  headerAdmin($data);
  //getModal('modalRoles', $data);

?>

    <main class="app-content">
      <div class="app-title">
        <div>
          <h1>
            <i class="fas fa-user-tag"></i> <?= $data['page_title']?>
            <button class="btn btn-primary" type="button" onclick="openModal();"><i class="fas fa-plus-square"></i>  Nuevo Personal</button>
          </h1>
          <p>Bienvenidos a la vista Personal de Bordados</p>
        </div>
      </div>



      <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-dark" id="tableUsuarios">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Dirección</th>
                                        <th>Teléfono</th>
                                        <th>Permisos</th>
                                        <th>Actualizar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!--Aqui se generaran los datos desde la base de dtaso-->
                                    <tr>
                                      <td>1</td>
                                      <td>Gustavo</td>
                                      <td>López</td>
                                      <td>Totonicapán</td>
                                      <td>12345678</td>
                                      <td>Boton</td>
                                      <td>Boton</td>
                                      <td>Boton</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
      </div>

    </main>
<?php footerAdmin($data); ?>