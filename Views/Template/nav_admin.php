    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?=media();?>/images/perfil.png" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">Gustavo López</p>
          <p class="app-sidebar__user-designation">Administrador</p>
        </div>
      </div>
      <ul class="app-menu">
        <li>
          <a class="app-menu__item" href="<?= base_url(); ?>/principal">
            <i class="app-menu__icon fa fa-dashboard"></i>
            <span class="app-menu__label">Principal</span>
         </a>
        </li>
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-users" aria-hidden="true"></i>
                <span class="app-menu__label">Usuarios</span>
                <i class="treeview-indicator fa fa-angle-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
                <a class="treeview-item" href="<?= base_url(); ?>/personal">
                    <i class="icon fa fa-circle-o"></i> Personal
                </a>
            </li>
            <li>
                <a class="treeview-item" href="<?= base_url(); ?>/usuarios">
                    <i class="icon fa fa-circle-o"></i> Usuarios
                </a>
            </li>
            <li>
                <a class="treeview-item" href="<?= base_url(); ?>/roles">
                <i class="icon fa fa-circle-o"></i> Roles
                </a>
            </li>
          </ul>
        </li>

        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fas fa-toolbox"></i>
                <span class="app-menu__label">Materiales</span>
                <i class="treeview-indicator fa fa-angle-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
                <a class="treeview-item" href="<?= base_url(); ?>/hilos">
                    <i class="icon fa fa-circle-o"></i> Hilos
                </a>
            </li>
            <li>
                <a class="treeview-item" href="<?= base_url(); ?>/telas">
                <i class="icon fa fa-circle-o"></i> Telas
                </a>
            </li>
          </ul>
        </li>
        
        <!--Productos-->
        <li>
            <a class="app-menu__item" href="<?= base_url(); ?>/productos">
                <i class="app-menu__icon fa fa-shopping-bag" aria-hidden="true"></i>
                <span class="app-menu__label">Productos</span>
            </a>
        </li>

        <!--Complementos-->
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-users" aria-hidden="true"></i>
                <span class="app-menu__label">Complementos</span>
                <i class="treeview-indicator fa fa-angle-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
                <a class="treeview-item" href="<?= base_url(); ?>/colores">
                    <i class="icon fa fa-circle-o"></i> Colores
                </a>
            </li>
            <li>
                <a class="treeview-item" href="<?= base_url(); ?>/diseños">
                    <i class="icon fa fa-circle-o"></i> Diseños
                </a>
            </li>
            <li>
                <a class="treeview-item" href="<?= base_url(); ?>/tipoHilos">
                <i class="icon fa fa-circle-o"></i> Tipo de hilos
                </a>
            </li>
          </ul>
        </li>

        <!--Cerrar sesión-->
        <li>
            <a class="app-menu__item" href="<?= base_url(); ?>/logout">
                <i class="app-menu__icon fa fa-sign-out" aria-hidden="true"></i>
                <span class="app-menu__label">Cerrar sesión</span>
            </a>
        </li>

       
      </ul>
    </aside>