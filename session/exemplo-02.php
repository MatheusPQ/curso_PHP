<?php

//Se tiver iniciado o exemplo-01.php antes, ao executar este arquivo será mostrado o valor da sessão.
//Toda página que for usar sessão requer o session_start().. 
//pode ser alterado no arquivo php.ini (session autostart)
// session_start();

require_once("config.php");

// session_unset($_SESSION); //apaga tdas variaveis de sessão

//limpa variaveis de sessão. A sessão em si, porém, ainda existe.
// session_unset($_SESSION['nome']);

echo $_SESSION["nome"];

//limpa a variavel e remove o usuario da sessão atual.. é como se tivesse acabado de entrar no site.
session_destroy();

?>