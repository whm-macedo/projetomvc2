<?php

  include "view/header.php";
  
?>


     <!-- CARROSEL  -->
     <div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item slide1 active">
          <img class="carousel-img" src="<?php echo $url; ?>/img/DOE+.png" alt="first slide">
          <div>
            <h5 style=" color:#FFFFFF ;">POSSO SER UM DOADOR?</h5>
          </div>
          <div><a class="btn  btn-primary" href="como-funciona.html" role="button"
              style="background-color:#FFFFFF; color: red;">Saiba Mais</a></div>
        </div>
        <div class="carousel-item slide1">
          <img src="<?php echo $url; ?>//img/slide2-1.png" class="" alt="...">
          <div class="carousel-caption d-none d-md-block">
           
          </div>
        </div>
        <div class="carousel-item slide1">
          <img src="..." class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
          </div>
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
  </div>
  <!-- FIM CARROUSEL -->

<div class="container-fluid">

    
<div class="jumbotron" style="background-color:white; display: block;">
    <div class="container">
      <h1 class="display-4 justify-content-center" style="color:red"><i class="fas fa-cart-plus"
          style="color: #ff0000;"></i> Produtos</h1>
      <hr style="background-color: red;">
    <div class="container">
     <div class="row mt-3"> 
     <?php foreach ($lista as $produto) {?>
        
      <div class="col-sm-3 mb-3">
            <div class="card h-100 ">
              <a href="#"><img class="card-img-top" src="<?php echo $url."../View/img/produtos/".$produto['imagem']?>" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#"></a>
                </h4>
                <h3><?php echo $produto['nome']?></h3>
                <h5>R$: <?php echo number_format($produto['preco'],2,",",".");?></h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!
                </p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
        <?php }?>
      
    </div>
    </div>
    </div>
<?php

  include "view/footer.php"; ?>