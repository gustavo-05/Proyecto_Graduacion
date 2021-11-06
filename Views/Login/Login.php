<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#118aaf"> <!-- Cambiar color si es necesario-->
    <link rel="shortcut icon" href="<?= media();?>/images/favicon.icon"> <!-- Cambiar el icono-->
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?= media();?>/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?= media();?>/css/style.css">
    <title><?php $data['page_tag']; ?></title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Bienvenidos</h1>
      </div>
      <div class="login-box">
        <form class="login-form" action="index.html">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Inicio de sesión</h3>
          <div class="form-group">
            <label class="control-label">Usuario</label>
            <input id="txtUsuarioLogin" class="form-control" type="text" placeholder="Ingrese su usuario" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">Contraseña</label>
            <input id="txtContraseñaLogin" class="form-control" type="password" placeholder="Ingrese su contraseña">
          </div>
          <div id="alertaLogin" class="text-center"></div>
          <div class="form-group btn-container">
            <button type="submit" class="btn btn-info btn-block">Entrar</button>
          </div>
        </form>
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="<?= media();?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?= media();?>/js/popper.min.js"></script>
    <script src="<?= media();?>/js/bootstrap.min.js"></script>
    <script src="<?= media();?>/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?= media();?>/js/plugins/pace.min.js"></script>
    <script src="<?= media();?>/js/<?php $data['page_functions_js'];  ?>"></script>
  </body>
</html>