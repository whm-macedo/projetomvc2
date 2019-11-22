<?php

namespace LOJA\Model;
use LOJA\Model\Produto;

class Item{
    private $id;
    private $produto;
    private $quantidade;

    public function __construct()
    {
        # code...
    }
    public function getId()
    {
        return $this->id;
    }
    public function settId($id)
    {
        return $this->id;
    }
    public function getProduto()
    {
        return $this->produto;
    }
    public function setProduto($id)
    {
        return $this->produto;
    }
    public function getQuantidade()
    {
        return $this->quantidade;
    }
    public function settQuantidade($id)
    {
        return $this->quantidade;
    }

    public function getId()
    {
        return $this->id;
    }
    public function settId($id)
    {
        return $this->id;
    }
}
