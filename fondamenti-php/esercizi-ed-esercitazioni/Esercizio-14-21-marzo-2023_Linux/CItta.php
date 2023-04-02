<?php
class Citta{
    private $nome;
    function __construct($nome){
        $this->nome = $nome;

    }
    function getNome(){
        return $this->nome;
    }
}

// $c = new Citta("Rimini");
// echo $c->getNome();
?>