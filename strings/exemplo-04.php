<?php

$frase = "A repetição é mãe da retenção.";

$palavra = "mãe";

$q = strpos($frase, $palavra);

//variável, a partir de onde, até onde
$texto = substr($frase, 0, $q);

var_dump($texto);

//a partir do final da palavra mãe, até o final da $frase
$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

//abaixo não inclui a palavra "mãe"
// $texto2 = substr($frase, $q, strlen($frase));

echo "<br>";

var_dump($texto2);

?>