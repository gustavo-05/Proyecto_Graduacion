<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title><?php echo $data['page_tag']; ?></title>

    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/carousel.css">
    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/whatsapp.css">

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <!-- colocacion de imagen por medio de url -->
        <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?= media(); ?>/images/icono1.ico" alt="logotipo" style="width: 70px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo base_url(); ?>/login">Iniciar sesión</a>
            </li>
        </ul>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
    </div>
    </nav>
    </div>

    <!-- Contenedor del carousel -->
    <div class="carousel">

        <figure class="icon-cards mt-5 carousel">
            <div class="icon-cards__content">
                <div class="icon-cards__item d-flex align-items-center justify-content-center"><span class="h1"></span><img class="imgProductos" src="<?= media(); ?>/images/IMG_20211019_093741.jpg" alt="Imagen producto 1"></div>
                <div class="icon-cards__item d-flex align-items-center justify-content-center"><span class="h1"></span><img class="imgProductos" src="<?= media(); ?>/images/IMG_20211019_100727.jpg" alt="Imagen producto 2"></div>
                <div class="icon-cards__item d-flex align-items-center justify-content-center"><span class="h1"></span><img class="imgProductos" src="<?= media(); ?>/images/IMG_20211019_104654.jpg" alt="Imagen producto 3"></div>
            </div>
        </figure>
        
        <div class="checkbox">
            <input class="d-none" id="toggle-animation" type="checkbox" checked />
            <label class="checkbox__checkbox" for="toggle-animation"></label>
            <label class="checkbox__label" for="toggle-animation">Detener animación</label>
        </div>
        
    </div>
    <br>

    <!-- div para cards-->
    <div class="container">
      <div class="card-group">
        <div class="card">
          <img src="https://lorempixel.com/1200/400/sports/" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img src="https://lorempixel.com/1200/400/sports/" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img src="https://lorempixel.com/1200/400/sports/" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="<?= media(); ?>/js/functions_carousel.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <a href="https://api.whatsapp.com/send?phone=33040665&text=Hola,%20ser%C3%ADan%20tan%20amables%20de%20brindarme%20mas%20informaci%C3%B3n%20acerca%20de%20un%20producto" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
  </body>
</html>