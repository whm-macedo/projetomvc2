<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <!-- MAPBOX CSS -->
 <script src='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.js'></script>
  <link href='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.css' rel='stylesheet' />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $url; ?>/css/style.css">
  <link rel="stylesheet" href="<?php echo $url; ?>/css/fontawesome/css/all.css">
    <title>DOE+</title>
  </head>
  <body>

  <div class="row rowtam">
    <div class="col-md-2 justify-content-center">
      <a class="navbar-brand  ml-4" href="#">
        <img src="../img/core-sl.png" width="100px" alt="">
      </a>
    </div>

    <div class="col-md-6 barra-pesquisa">

      <form class="form-inline ">
        <div class="input-group barra-tam">

          <input type="text" class="form-control" placeholder="Pesquisa" aria-label="Usuário"
            aria-describedby="basic-addon1">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1" style="background-color: red; color:#FFFFFF"><i
                class="fas fa-search"></i></span>
          </div>
        </div>


    </div>
    <div class="col-md-4 btam icon">
      <i class="fas fa-user" style="color: red;"></i> Login
      <i class="fas fa-cart-plus" style="color: red;"></i> Carrinho

    </div>
  </div>
  <hr style="background-color: red;">

  <nav class="navbar  navbar-expand-lg navbar-light mb-9" style="background-color:#FFFFFF">

    <div class="collapse justify-content-center navbar-collapse mt-2 mt-lg " id="navbarNav">
      <ul class="navbar-nav ">
        <li class="nav-item ">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Projeto</a>

        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Mapas</a>
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
          <a class="nav-link" href="#">Loja</a>
        </li>
      </ul>

    </div>

  </nav>
  <hr style="background-color: red;">

  
    <div class="col-12 justify-content-center">
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
    </div>


