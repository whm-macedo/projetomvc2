<?php include "header.php"?>

  <h1> Meu Carrinho de Compras </h1>

<hr>

<div class="row">

    <div class="card mb-3 col" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?php echo $url; ?>/view/img/produtos/6a2231f2119b814a87d2a2e6e55c6c0e.jpg" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>

    <div class="dropdown col">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            1
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">+1</a>
            <a class="dropdown-item" href="#">+2</a>
            <a class="dropdown-item" href="#">+3</a>
        </div>
        <div>
            <a href="">Deletar</a>
        </div>
    </div>

    <div class="card col">
    <div class="card-header">
        Valor Parcial
    </div>
    <div class="card-body">
        <h5 class="card-title">15.500,00</h5>
        <p class="card-text">Essa camisa está com desconto</p>
      
    </div>
    </div>
    
</div> 

<hr>
<div class="row">

    <div class="card mb-3 col" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?php echo $url; ?>/view/img/produtos/6a2231f2119b814a87d2a2e6e55c6c0e.jpg" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>

    <div class="dropdown col">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            1
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">+1</a>
            <a class="dropdown-item" href="#">+2</a>
            <a class="dropdown-item" href="#">+3</a>
        </div>
        <div>
            <a href="">Deletar</a>
        </div>
    </div>

    <div class="card col">
        
        <div class="card-body">
            <h5 class="card-title">15.500,00</h5>
            <p class="card-text">Essa camisa está com desconto</p>
            <a href="#" class="btn btn-primary">Go Gastar</a>
        </div>
    </div>
    
</div> 
<?php include "footer.php"?>