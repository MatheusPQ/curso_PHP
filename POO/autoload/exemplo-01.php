<?php

//Vai automaticamente fazer o require nas classes, conforme necessário.
//Nesse caso, vai fazer require na classe DelRey.php
//DelRey extende Automovel. Logo, vai também fazer require na classe Automovel.php
function __autoload($nomeClasse){ //DEPRECIADA.. USAR spl_autoload_register
    var_dump($nomeClasse);
    require_once("$nomeClasse.php");
}


$carro = new DelRey();
$carro->acelerar(80);

?>