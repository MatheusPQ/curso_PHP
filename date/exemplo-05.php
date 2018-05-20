<?php

$dt = new DateTime();
//Dois dias é representado com P2D.
//Dois segundos é representado com PT2S. (T de Time, pois há elemento de tempo)
//Seis anos e cinco minutos é representado com P6YT5M.
$periodo = new DateInterval("P15D");
echo $dt->format("d/m/Y H:i:s");
echo "<br>";
$dt->add($periodo);

echo $dt->format("d/m/Y H:i:s");

?>