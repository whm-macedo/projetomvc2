<?php
namespace LOJA\Model;
use LOJA\Model\Item;
use LOJA\Model\Produto;
use LOJA\DAO\DAOProduto;

class Carrinho{
    private $id;
    private $lista;

    public function __construct()
    {
        
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId()
    {
        $this->id = $id;
    }

    public function addItem($id)
    {
        $dao = new DAOProduto();
        $obj = new Produto();
        $obj = $dao->buscaPorId($id);

        if($obj->getId()){
            $item = new Item();
            $item->setProduto($obj);
            $item->setQuantidade(1);
        };
        array_push($this->lista, $item);
    }
    public function removeItem($id)
    {
        foreach ($this->lista as $item) {
            if ($item->getProduto()->gitId()===$id) {
                $index = array_search($item, $this->lista, true);
                unset($this->lista[$index]);
            };
        }
    }
}