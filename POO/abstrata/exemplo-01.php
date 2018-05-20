<?php

interface Veiculo {

    public function acelerar($velocidade);
    public function frear($velocidade);
    public function trocarMarcha($marcha);

}

//Qualquer automóvel implementa Veiculo, mas Automóvel ñ pode ser instanciado (pois é abstrato)
abstract class Automovel implements Veiculo {
    public function acelerar($v){
        echo "O veículo acelerou até ". $v . " km/H.";
    }

    public function frear($v){
        echo "O veículo freou até ". $v . " km/H.";
    }

    public function trocarMarcha($m){
        echo "O veículo engatou a marcha ". $m;
    }
}

class DelRey extends Automovel {
    
    public function empurrar(){

    }
    
}

$carro = new DelRey();
// $carro = new Automovel(); //Erro! Não se pode instanciar classe abstrata.
$carro->acelerar(200);

?>