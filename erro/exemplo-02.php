<?php

error_reporting(E_ALL & ~E_NOTICE); //vai sobrescrever o php.ini
//Todos os erros, mas ignorar (~) os notices

$nome = $_GET["nome"];

echo $nome;

?>