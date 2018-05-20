<?php

interface Veiculo {

    public function acelerar($velocidade);
    public function frear($velocidade);
    public function trocarMarcha($marcha);

}

class Civic implements Veiculo {
    // class Civic implements Veiculo, Interface2, Interface3 { //Pode implementar várias interfaces
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

$carro = new Civic();
$carro->trocarMarcha(1);
?>