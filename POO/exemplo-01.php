<?php

class Pessoa {

    public $nome;

    public function falar(){
        return "O meu nome é ".$this->nome;
    }

}


$fulano = new Pessoa();

$fulano->nome = "Fulano Ciclano";
echo $fulano->falar();
?>