<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "root");

//Iniciando a transação.
$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 2;

//Os valores dentro do array vão na ordem dos pontos de interrogação na query acima
//array($id, $nome, $password..)
$stmt->execute(array($id));

//Desfaz o execute acima.. como se fosse um ctrl-z
$conn->rollback();

//Confirma a transação
// $conn->commit();

echo "Deletado";
?>