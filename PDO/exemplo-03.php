<?php

//PDO trata os statements, evitando SQLInjection
$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "root");

//:LOGIN, :PASSWORD.. pode ser o nome que vc quiser
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD )");

$login = "fulano";
$password = "12345678";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Inserido";
?>