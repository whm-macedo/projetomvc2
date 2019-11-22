<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- MAPBOX CSS -->
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.css' rel='stylesheet' />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $url; ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $url; ?>/css/fontawesome/css/all.css">
    <!-- <link rel="stylesheet" href="<?php echo $url; ?>/css/style.css"> -->
    <title>DOE+</title>
  </head>

  <body>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Pesquisa" aria-label="Pesquisa">          
            <span class="input-group-text"> <i class="fas fa-search"></i> </span>          
          </div>
        </div>
        <div class="col-md-6">
          <i class="fas fa-user">Login</i>
          <i class="fas fa-cart-plus">Carrinho</i>
        </div>
      </div>

      <hr style="background-color: red;">

      <nav class="navbar  navbar-expand-lg navbar-light mb-9">
        <a class="navbar-brand" href="#">
          <img src="<?php echo $url; ?>/img/DOE+.png" width="30" height="30" alt="">
        </a>
        <!-- <div class="collapse justify-content-center navbar-collapse mt-2 mt-lg " id="navbarNav"> -->
          <ul class="navbar-nav ">
            <li class="nav-item ">
              <a class="nav-link" href="<?php echo $url; ?>home">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo $url; ?>projeto">Projeto</a>

            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo $url; ?>mapas">Mapas</a>
            </li>
            <li class="nav-item dropdown ">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Como funciona</a>
              <div class="dropdown-menu">
                <a class="dropdown-item">Posso ser doador</a>
                <a class="dropdown-item">Para aonde meu sangue vai</a>
                <a class="dropdown-item">Quais pessoa seu ajudo</a>
                <a class="dropdown-item">Depoimentos</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                Ser voluntario
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $url; ?>produto/listar">Loja</a>
            </li>
          </ul>

        <!-- </div> -->

      </nav>

      <hr style="background-color: red;">
    
      <!-- <div class="col-12 justify-content-center">
        <nav class="navbar navbar-expand-lg navbar-light justify-content-center " style="background-color:white;">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo02">
            <ul class="navbar-nav">
              <li class="nav-item ">
                <a class="nav-link" href="#"><i class="fas fa-tshirt"></i> Roupa</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-gamepad"></i> Brinquedos</a>

              </li>

              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-sticky-note"></i> Adesivos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-sticky-note"></i> Acessorios</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-laptop-code"></i>
                  Informatica
                </a>
              </li>
            </ul>

          </div>
        </nav>
      </div> -->