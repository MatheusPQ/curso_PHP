<?php

class Pessoa {
    public $nome = "Rasmus Lerdorf";
    protected $idade = 48; //Apenas a própria classe ou quem herda da classe (métodos, etc..)
    private $senha = "123456"; //Apenas a própria classe

    public function verDados(){ //Como o método é público, pode ser chamado fora da classe!
        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    }
}

$objeto = new Pessoa();

// echo $objeto->senha;
// echo $objeto->idade;
// echo $objeto->senha;

$objeto->verDados();
?>