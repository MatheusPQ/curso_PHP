<?php

function trataNome($name){
    if(!$name){
        throw new Exception("Nenhum nome informado.", 1);
    }

    echo ucfirst($name)."<br>";
}

try {
    trataNome("Joao");
    trataNome("");
} catch (Exception $e) {
    echo $e->getMessage();
} finally { //Sempre executa
    echo "Executou o Try!";
}

?>