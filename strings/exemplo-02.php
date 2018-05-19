<?php

$nome = "joao rangel";

$nome = strtoupper($nome);

echo $nome;

$nome = strtolower($nome);

echo "<br>";

echo $nome;
echo "<br>";

//primeira letra de cada palavra fica maiuscula
echo ucwords($nome);

//Primeira letra da primeira palavra fica maiuscula
echo ucfirst($nome);
?>