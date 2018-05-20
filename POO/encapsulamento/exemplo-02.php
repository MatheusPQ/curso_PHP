<?php

class Pessoa {
    public $nome = "Rasmus Lerdorf";
    protected $idade = 48; //Apenas a própria classe ou quem herda da classe (métodos, etc..)
    private $senha = "123456"; //Apenas a própria classe

    public function verDados(){ //Como o método é público, pode ser chamado fora da classe!
        echo get_class($this) . "<br>";
        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    }
}

class Programador extends Pessoa { //Não vai extender a senha, pois é privada.

    public function verDados(){

        echo get_class($this) . "<br>";
        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    }

}

$objeto = new Programador();

$objeto->verDados();
?>