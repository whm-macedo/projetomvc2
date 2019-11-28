<?php 
use PHPUnit\Framework\TestCase; // importar PHPUnit
use LOJA\Model\Cliente;  // loja foi configurada noJSON composer

class ClienteTest extends TestCase
{
    public function testClass()
    {
        $c = new Cliente();
        $c->setNome('Daniel');
        $c->setTelefone('(21)1231-2132');
        $c->setEmail('daniel@email.com');
        $c->setCpf('123.456.789-10');
       
        $this->assertEquals($c->getNome(), 'Daniel');
        $this->assertEquals($c->getTelefone(), '(21)1231-2132');
        $this->assertEquals($c->getEmail(), 'daniel@email.com');
        $this->assertEquals($c->getCpf(), '123.456.789-10');
    }
    
    public function testErroNome()
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Nome Inválido');
        $c = new Cliente();
        $c->setNome("");
    }
    public function testErroTelefone()
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Telefone Inválido');
        $c = new Cliente();
        $c->setTelefone("");
    }
    public function testsErroEmail()
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('E-mail Inválido');
        $c = new Cliente();
        $c->setEmail('danielemail.com');
    }
    public function testErroCpf()
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('CPF Inválido');
        $c = new Cliente();
        $c->setCpf("");
    }
    public function testErroRua()
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Rua Inválido');
        $c = new Cliente();
        $c->setRua("");
    }
    public function testErroComplemento()
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Complemento Inválido');
        $c = new Cliente();
        $c->setComplemento("");
    }
    public function testErroCep()
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('CEP Inválido');
        $c = new Cliente();
        $c->setCep("");
    }
    public function testErroUf()
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('UF Inválido');
        $c = new Cliente();
        $c->setUf("");
    }
    public function testErroBairro()
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Bairro Inválido');
        $c = new Cliente();
        $c->setBairro("");
    }   
    

}
