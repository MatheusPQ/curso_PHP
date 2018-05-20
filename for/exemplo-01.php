<?php

for ($i = 0; $i < 1000; $i+=5){


    //Continue: vai pular este ciclo e ir para o próximo
    //no caso, nao vai mostrar os numeros entre 200 e 800.
    if($i > 200 && $i < 800) continue;

    //vai sair do for.
    if($i == 900) break;
    echo $i."<br>";
}

?>