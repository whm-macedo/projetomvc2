<?php
namespace LOJA\API;
use LOJA\DAO\DAOUsuario;
use LOJA\model\Usuario;

class UsuarioLOgar{
    public $msg;

    function __construct(){
        if($_POST){
            try{
                $obj = new Usuario();
                $obj->setNome($_POST['nome']);
                $obj->setSenha($_POST['senha']);
                
                $DAO = new DAOUsuario();
                $result = $DAO->buscaPorNomeSenha($obj);

                if($result){ //se houver
                    //guarda sessão do usuario dentro do servidor
                    $_SESSION['usuarioid'] = $result['id'];
                    $_SESSION['usuarionome'] = $result['nome'];

                    header("location: http://127.0.0.1/loja2-master/painel/adm");
                }else{ //nao houver
                    $this->msg = "Usuario/senha incorreta";

                }
            }catch(\Exception $e){
                $this->msg = $e->getMessage();
            }
        }
    }
}

?>