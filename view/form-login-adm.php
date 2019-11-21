<?php

  include "view/header.php";
  
?>

<form class="form-horizontal" method="post" action="adm">
    <fieldset>

    <!-- Form Name -->
    <legend>Login Administrador </legend>

    <!-- Text input-->
    <div class="form-group">
    <div class="col-md-4">
    <input id="nome" name="nome" type="text" placeholder="Usuario" class="form-control input-md" required="">
        
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">  
    <div class="col-md-4">
    <input id="senha" name="senha" type="password" placeholder="senha" class="form-control input-md" required="">
        
    </div>
    </div>

    <div class="form-group">
    <label class="col-md-4 control-label" for="cadastrar"></label>
    <div class="col-md-4">
        <button id="cadastrar" name="cadastrar" class="btn btn-primary">Entrar</button>
    </div>
    </div>
  
</form>

<?php

  include "view/footer.php";
  
?>
