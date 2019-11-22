<?php include "view/header.php"; ?>


<!-- CARROSEL  -->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="carousel-img" src="<?php echo $url; ?>/img/DOE+.png" alt="first slide">
    </div>
    <div class="carousel-item">
      <img class="carousel-img" src="<?php echo $url; ?>/img/DOE+.png" alt="...">
    </div>
    <div class="carousel-item">
      <img class="carousel-img" src="<?php echo $url; ?>/img/DOE+.png" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- FIM CARROUSEL -->

<!-- INICIO JUMBOTRON "IMPORTANCIA DE DOAR SANGUE" -->
<div class="jumbotron">
  <h1 class="display-9  " style="color:red">POR QUE SER UM DOADOR?</h1>
  <p class="lead">Beneficios de ser um doador</p>
  <hr class="my-4">
  <div class="list-group">
    <a href="#" class="list-group-item list-group-item-action active">
      Cras justo odio
    </a>
    <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
    <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
    <a href="#" class="list-group-item list-group-item-action">Exame de Sangue</a>
    <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
  </div>
<div>

<!-- FIM JUMBOTRON "IMPORTANCIA DE DOAR SANGUE" -->

<!-- INICIO MAPBOX -->
<div class="container">
  <div class="mapbox" id='map' style='width: 100%; height: 300px;'>
    <script>
      mapboxgl.accessToken = 'pk.eyJ1Ijoicm9iZXJ0by1qdW5pb3I5OSIsImEiOiJjazJuN212YTkwMXB5M2JuejI4cTQ0MTd2In0.hXajmx4S4Ev9eaeJPKeSeA';
      var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11'
      });
    </script>
  </div>
</div>
<!-- FIM MAPBOX -->


<?php include "view/footer.php"; ?>