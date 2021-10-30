<?php 
  headerAdmin($data);
  getModal('modalTelas', $data);

?>
    <div id="contentAjax"></div>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1>
            <i class="fas fa-user-tag"></i> <?= $data['page_title']?>
            <button class="btn btn-Nuevo" type="button" onclick="openModal();"><i class="fas fa-plus-square"></i>  Nueva Tela</button>
          </h1>
          <p>Bienvenidos a la vista de telas</p>
        </div>
      </div>



      <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-dark" id="tableHilos">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Color</th>
                                        <th>Cantidad</th>
                                        <th>Descripción</th>
                                        <th>Editar información</th>
                                        <th>Actualizar Cantidad</th>
                                        <th>Eliminar</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <!--Aqui se generaran los datos desde la base de dtaso-->
                                    <tr>
                                      <td>1</td>
                                      <td>Coral</td>
                                      <td>8</td>
                                      <td>Tela sin rayas</td>
                                      <td>Botón</td>
                                      <td>Botón</td>
                                      <td>Botón</td>
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