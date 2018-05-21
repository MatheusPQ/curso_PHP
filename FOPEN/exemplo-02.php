<?php

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

// print_r($usuarios);
$headers = array();

foreach ($usuarios[0] as $key => $value) {
    array_push($headers, ucfirst($key));
}

$file = fopen("usuarios.csv", "w+");

//implode vai separar os itens do array em vírgulas
fwrite($file, implode(",", $headers). "\r\n");

foreach ($usuarios as $row) { //nas linhas
    $data = array();

    foreach ($row as $key => $value) { //nos campos de cada linha
        array_push($data, $value);
    }

    fwrite($file, implode(",", $data). "\r\n");
}

fclose($file);

?>