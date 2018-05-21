<?php

if($_SERVER["REQUEST_METHOD"] === "POST") {

    $cmd = escapeshellcmd($_POST["CMD"]);
    var_dump($cmd);

    echo "<pre>";
    
    //Sempre evitar receber dados dinâmicos.
    //Mas se for necessário, use o escapeshellcmd
    $comando = system($cmd, $retorno);    
    
    echo "</pre>";
}

?>

<form method="POST">
    <input type="text" name="cmd">
    <button type="submit">Enviar</button>
</form>