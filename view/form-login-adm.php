<?php

  include "view/header.php";
  
?>

<div class='row'>
    <div class='container'>
    
    <div class='col-md-12 d-flex justify-content-center formadm'>
      <form class="form-horizontal " method="post" action="adm">
        <fieldset>

        <!-- Form Name -->
      
        <legend>  
        <img src="../img/doe-final.png" alt="">
        </legend>

        <!-- Text input-->
        <div class="form-group">
        
        <input id="nome" name="nome" type="text" placeholder="Usuario" class="form-control input-md" required="">
            
        
        </div>

        <!-- Text input-->
        <div class="form-group">  
        
        <input id="senha" name="senha" type="password" placeholder="senha" class="form-control input-md" required="">
            
        
        </div>

        <div class="form-group">
        <label class=" control-label" for="cadastrar" ></label>
        
            <button id="login" style="width:388px" name="login" class="btn btn-primary">Entrar</button>
            <a class="d-flex justify-content-center " href="">
              <p>Não tenho uma conta</p>
            </a>
        </div>
      
    </form>

<?php

  include "view/footer.php";
  
?>
