<?php

function ola(){

    //Recupera num array todos os argumentos passados para a função
    $argumentos = func_get_args();
    return $argumentos;
}

var_dump(ola("Bom dia", 10));


?>