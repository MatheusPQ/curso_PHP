<?php

//servidor, usuario, senha, banco de dados
$conn = new mysqli("localhost", "root", "root", "dbphp7");

if($conn->connect_error){
    echo "Error: " . $conn->connect_error;
}

//Prepara um comando para ser enviado para o BD
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)");

//s de string. String para o primeiro '?', s para o segundo '?'.
//depois, os parametros em si (deslogin, dessenha)
// $stmt->bind_param("ss", "user", "12345"); //Errado!
$stmt->bind_param("ss", $login, $pass); //Precisa ser assim, pois o valor é passado por referência

$login = "user";
$pass = "12345";

$stmt->execute();

//statement já está criado.. é só definir as vars novamente, e executar novamente
$login = "root";
$pass = "abcde";

$stmt->execute();

?>