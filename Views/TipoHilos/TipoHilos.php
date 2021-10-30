<?php 
  headerAdmin($data);
  getModal('modalTipoHilos', $data);

?>
    <div id="contentAjax"></div>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1>
            <i class="fas fa-user-tag"></i> <?= $data['page_title']?>
            <button class="btn btn-Nuevo" type="button" onclick="openModal();"><i class="fas fa-plus-square"></i>  Nuevo Tipo</button>
          </h1>
          <p>Bienvenidos a la vista de Tipo de Hilos</p>
        </div>
      </div>



      <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-dark" id="tableTipoHilos">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tipo</th>
                                        <th>Editar información</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!--Aqui se generaran los datos desde la base de dtaso-->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
      </div>

    </main>
<?php footerAdmin($data); ?>