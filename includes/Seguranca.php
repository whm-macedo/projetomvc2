<?php
namespace LOJA\includes;

class Seguranca{
  
    public static function restritoAdm(){
        if(!isset($_SESSION['usuarioid'])){ //se não existir usuario executa
            header("location: http://localhost/loja2-master/login/adm");
        }
    }
}