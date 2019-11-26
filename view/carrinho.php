<?php include "header.php"?>
<div class="container">
    <div class="row">
        <?php
            @$carrinho = $_SESSION['carrinho'];

            if($carrinho === null || empty($carrinho->getItems())){
                // Inicio HTML
                ?>
                    <p>Seu Carrinho está vazio</p>

                <?php
                // Fim HTML
            }else{

                foreach ($carrinho->getItems() as $item){
                   
                    $produto = $item->getProduto();
                    $link = "http://localhost/projetomvc2/carrinho/remover/".$produto->getPk_produto();
                
                    // Inicio HTML
                ?>
       
                     <div class="col-md-8"> 
                        <div class="row">
                            <div class="col-md-2"><img width="100%" src="<?php echo $url.'/View/img/produtos/'.$produto->getImagem(); ?>"></div>
                            <div class="col-md-10">
                            <p><?php echo $produto->getNome(); ?></p>
                            <a href="<?php echo $link; ?>" class="btn btn-danger">Remover</a>
                            
                            </div>
                        </div>
                    </div> 

        <?php   
        // Fim HTML
                }
            }
        ?>

    </div>
</div>

<?php include "footer.php"?> 

<!-- <hr>

<div class="container">
    <h1 class="text-center mb-5"> Meu Carrinho de Compras </h1>
    <div class="row">

        <div class="card mb-3 col" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="<?php echo $url; ?>/view/img/produtos/6a2231f2119b814a87d2a2e6e55c6c0e.jpg" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"> <p><?php echo $produto->getNome(); ?></p>/h5>
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
</div>
 -->
