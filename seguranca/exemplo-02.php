<?php

$id = ( isset($_GET["ID"]) ) ? $_GET["id"]:1; //id 1

if(!is_numeric($id) || strlen($id) > 5 ){
    exit("Hacker!");
}

$conn = mysqli_connect("localhost", "root", "root", "dbphp7");

$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

$exec = mysqli_query($conn, $sql);

while ($resultado = mysqli_fetch_object($exec)) {
    // echo $resultado->deslogin . "<br>";
    var_dump($resultado);
}

?>