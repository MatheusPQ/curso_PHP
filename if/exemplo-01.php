<?php

$qualASuaIdade = 22;
$idadeCrianca = 12;

$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadeCrianca){
    echo "Uma criança";
} else if($qualASuaIdade < $idadeMaior){
    echo "Adolescente";
} else if ($qualASuaIdade < $idadeMelhor){
    echo "Adulto";
} else {
    echo "Idoso";
}

echo ($qualASuaIdade < $idadeMaior) ? "Menor de idade" : "Maior de idade";

?>