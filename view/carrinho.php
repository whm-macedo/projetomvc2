<?php include "header.php"?>
<div class="container">
    <div class="row">
    <h1 class="text-center mb-5"> Meu Pedidos </h1>
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
                    $linkRemove = "http://localhost/projetomvc2/carrinho/remover/".$produto->getPk_produto();
                
                    // Inicio HTML
                ?>
       
                    
<hr> 

<div class="container">
<div class="row itemcarrinho">

<div class="col-md-3">
    <div class="card" >
        <img class="card-img-top" src="<?php echo $url.'/View/img/produtos/'.$produto->getImagem(); ?>" alt="Imagem de capa do card">
    </div>
</div>
<div class="cold-md-4">

    <div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title"> <p><?php echo $produto->getNome(); ?></p>
        <p class="card-text">Descrição do produto</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                <div class="dropdown ">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            1
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">+1</a>
                            <a class="dropdown-item" href="#">+2</a>
                            <a class="dropdown-item" href="#">+3</a>
                        </div>
        
                    </div>
        </div>
       
    </div>
    
</div>
<div class="cold-md-2" style="margin:70px;">

</div>
<div class="cold-md-3">
        <div class="card-body">
                <h5 class="card-title">15.500,00</h5>
                <p class="card-text">Essa camisa está com desconto</p>
                <div>
                <a href="<?php echo $linkRemove; ?>" class="btn btn-danger">Remover</a>
            </div>
            
</div>
</div>

   
</div>
<hr style="margin:10px;">
        <?php   
        // Fim HTML
                }
            }
        ?>

    </div>
</div>

<?php include "footer.php"?> 


