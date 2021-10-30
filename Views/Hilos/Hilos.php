<?php 
  headerAdmin($data);
  getModal('modalHilos', $data);

?>
    <div id="contentAjax"></div>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1>
            <i class="fas fa-user-tag"></i> <?= $data['page_title']?>
            <button class="btn btn-Nuevo" type="button" onclick="openModal();"><i class="fas fa-plus-square"></i>  Nuevo Hilo</button>
          </h1>
          <p>Bienvenidos a la vista de Hilos</p>
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
                                        <th>Código</th>
                                        <th>Tipo</th>
                                        <th>Cantidad</th>
                                        <th>Descripción</th>
                                        <th>Editar información</th>
                                        <th>Actualizar cantidad</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!--Aqui se generaran los datos desde la base de dtaso-->
                                    <tr>
                                      <td>1</td>
                                      <td>Blanco</td>
                                      <td>1254</td>
                                      <td>Polyester</td>
                                      <td>8</td>
                                      <td>Conos polyester, color oficial</td>
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