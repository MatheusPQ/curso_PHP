<?php

class Endereco {
    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c){
        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }

    //É chamado quando o obj. é destruído (isto é, é removido da memória).
    //Quando, por exemplo, página chegou ao fim da execução, ou quando chama-se o 'unset'.
    public function __destruct(){
        //var_dump("Destruir");
    }

    public function __toString(){
        return $this->logradouro.", ".$this->numero." - ".$this->cidade;
    }
}

$meuEndereco = new Endereco("Rua tal", "123", "Santos");

// var_dump($meuEndereco);
// unset($meuEndereco);

echo $meuEndereco; //Vai chamar o __toString, pois o echo precisa de uma string!
?>