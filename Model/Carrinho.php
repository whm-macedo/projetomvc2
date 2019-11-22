<?php
namespace LOJA\Model;
use LOJA\Model\Item;

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
}