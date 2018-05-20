<?php

interface Veiculo {
    public function acelerar($velocidade);
    public function frear($velocidade);
    public function trocarMarcha($marcha);
}

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

?>