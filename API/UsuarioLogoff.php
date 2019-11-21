<?php
namespace LOJA\API;

class UsuarioLogoff{
    function __construct(){
        unset($_SESSION['usuarioid']); //destruir sessão
        unset($_SESSION['usuarionome']); // destruir sessão
        unset($_SESSION);
        header("location: http://127.0.0.1/loja2-master/login/adm");
    }
}