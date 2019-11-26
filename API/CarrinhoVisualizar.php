<?php
namespace LOJA\API;
use LOJA\DAO\DAOProduto;
use LOJA\Model\Carrinho;
use LOJA\Model\Item;
use LOJA\Model\Produto;

class CarrinhoVisualizar{

    public function __construct(){
        $carrinho;

        $id = $_GET['id'];
        $add = true; // true-> adicione no carrinho // false-> ja existe no carrinho, não adicionar

        //se existir carrinho criado
        if (isset($_SESSION['carrinho'])){
            $carrinho  = $_SESSION['carrinho']; // Pega o carrinho

            // Verifica se o produto já existe no carrinho
            foreach ($carrinho->getitems() as $item) {
                if ($item->getProduto()->getId()===$id) { // Verificação feita pelo ID do produto
                    $add = false; // Produto encontrado, não adicione
                };
            }
            }else{
                // Carrinho não existe na Session, então crie
                $carrinho = new Carrinho();
            }
            // Produto não consta no carrinho, então adicione
            if ($add===true) {
                $carrinho->addItem($id); // Adicionando produto
                $_SESSION['carrinho'] = $carrinho; // Coloca o carrinho na session com o produto adicionado
            }
        }
    
}