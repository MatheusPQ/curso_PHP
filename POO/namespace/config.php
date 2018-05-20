<?php

spl_autoload_register(function($nameClass){
    //Faz o require do Cadastro de cliente.
    //Cadastro de cliente extende o Cadastro normal, ai faz o require dele tbm!
    var_dump($nameClass . "<br>");

    $dirClass = 'class'; //Pasta onde será procurada as classes
    $filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass .".php"; //Caminho do arquivo completo

    if(file_exists($filename) === true){
        require_once($filename);
    }
});

?>