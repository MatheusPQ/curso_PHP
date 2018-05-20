<?php

session_id('93n8c4i563le29701go4qa42d'); //Recupera uma sessão
//Por exemplo, você pode, numa aba anônima, recuperar dados de uma sessão já aberta
//Aí, quando iniciar a sessão na linha abaixo, vai iniciar com o mesmo ID especificado acima

require_once("config.php");

//Gera um id novo de sessão
//Interessante gerar um novo id toda vez que realizar um login, por exemplo. (por segurança)
session_regenerate_id();

echo session_id();

var_dump($_SESSION);
?>