<?php

function incluirClasses($nomeClasse){
    if(file_exists($nomeClasse. ".php") === true){ //Verifica se o arquivo existe neste diretório
        require_once($nomeClasse. ".php");
    }
}

//Standard PHP Library
//Conjunto de funções nativas do PHP!
spl_autoload_register("incluirClasses");
spl_autoload_register(function($nomeClasse){

    if(file_exists("Abstratas". DIRECTORY_SEPARATOR . $nomeClasse. ".php") === true){
        require_once("Abstratas". DIRECTORY_SEPARATOR . $nomeClasse. ".php");
    }

});

$carro = new DelRey();
$carro->acelerar(80);
?>