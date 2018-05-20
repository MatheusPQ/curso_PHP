<?php

function ola($texto = "mundo", $periodo = "Bom dia"){ //define um valor padrão

//nesse caso, é obrigatório enviar um valor para $texto
// function ola($texto, $periodo = "Bom dia"){ 

    return "Olá $texto! $periodo! <br>";
    //aspas duplas, portanto permite interpolação de variaveis dentro das aspas.
}

echo ola();
echo ola("", "Boa noite");
echo ola("fulano", "Boa tarde");
echo ola("ciclano", "");

?>