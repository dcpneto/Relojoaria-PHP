<?php
require_once("banco.php");

class Cadastro extends Banco {

    private $nome;
    private $marca;
    private $quantidade;
    private $preco;
    private $flag;
    private $data;

    //Set
    public function setNome($string){
        $this->nome = $string;
    }
    public function setMarca($string){
        $this->marca = $string;
    }
    public function setQuantidade($string){
        $this->quantidade = $string;
    }
    public function setPreco($string){
        $this->preco = $string;
    }
    public function setFlag($string){
        $this->flag = $string;
    }
    public function setData($string){
        $this->data = $string;
    }
    //Get
    public function getNome(){
        return $this->nome;
    }
    public function getMarca(){
        return $this->marca;
    }
    public function getQuantidade(){
        return $this->quantidade;
    }
    public function getPreco(){
        return $this->preco;
    }
    public function getFlag(){
        return $this->flag;
    }
    public function getData(){
        return $this->data;
    }


    public function incluir(){
        return $this->setRelogio($this->getNome(),$this->getMarca(),$this->getQuantidade(),$this->getPreco(),$this->getData());
    }
}
?>
