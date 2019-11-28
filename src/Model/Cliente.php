<?php

namespace LOJA\Model;
use LOJA\includes\Util;

    class Cliente{
        private $pk_cliente;
        private $nome;
        private $telefone;
        private $email;
        private $cpf;
        private $rua;
        private $complemento;
        private $cep;
        private $uf;
        private $bairro;

        public function __construct(){
            
        }
        public function getPk_cliente(){
            return $this->pk_cliente;
        }
    
        public function setPk_cliente($pk_cliente){
            $this->pk_cliente = $pk_cliente;
        }
    
        public function getNome(){
            return $this->nome;
        }
    
        public function setNome($nome){
            if ($nome === ""){            
            throw new \Exception('Nome Inválido');
            }else{
                $this->nome = $nome;
            }                        
            
        }
    
        public function getTelefone(){
            return $this->telefone;
        }
    
        public function setTelefone($telefone){
            if ($telefone === ""){            
                throw new \Exception('Telefone Inválido');
                }else{                                       
            $this->telefone = $telefone;
        }
        }
    
        public function getEmail(){
            return $this->email;
        }
    
        public function setEmail($email){
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            $this->email = $email;
            else
                throw new \Exception('E-mail Inválido');
        }
    
        public function getCpf(){
            return $this->cpf;
        }
    
        public function setCpf($cpf){
            if ($cpf === ""){            
                throw new \Exception('CPF Inválido');
                }else{                                       
            $this->cpf = $cpf;
        }
        }
    
        public function getRua(){
            return $this->rua;
        }
    
        public function setRua($rua){
            if ($rua === ""){            
                throw new \Exception('Rua Inválido');
                }else{                                       
            $this->rua = $rua;
        }
        }
    
        public function getComplemento(){
            return $this->complemento;
        }
    
        public function setComplemento($complemento){
            if ($complemento === ""){            
                throw new \Exception('Complemento Inválido');
                }else{                                       
            $this->complemento = $complemento;
        }
        }
    
        public function getCep(){
            return $this->cep;
        }
    
        public function setCep($cep){
            if ($cep === ""){            
                throw new \Exception('CEP Inválido');
                }else{                                       
            $this->cep = $cep;
        }
        }
    
        public function getUf(){
            return $this->uf;
        }
    
        public function setUf($uf){
            if ($uf === ""){            
                throw new \Exception('UF Inválido');
                }else{                                       
            $this->uf = $uf;
        }
        }
    
        public function getBairro(){
            return $this->bairro;
        }
    
        public function setBairro($bairro){
            if ($bairro === ""){            
                throw new \Exception('Bairro Inválido');
                }else{                                       
            $this->bairro = $bairro;
        }
        }
    }
?>