<?php 
  headerAdmin($data);
  getModal('modalRoles', $data);

?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1>
            <i class="fas fa-user-tag"></i> <?= $data['page_title']?>
            <button class="btn btn-primary" type="button" onclick="openModal();"><i class="fas fa-plus-square"></i>  Nuevo Rol</button>
          </h1>
          <p>Bienvenidos a la vista Roles de usuario</p>
        </div>
        <!--
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="<?= base_url();?>/roles"><?= $data['page_title']?></a></li>
        </ul>
        -->
      </div>



      <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-dark" id="tableRoles">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Rol</th>
                                        <th>Descripción</th>
                                        <th>Estado</th>
                                        <th>Permisos</th>
                                        <th>Actualizar</th>
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