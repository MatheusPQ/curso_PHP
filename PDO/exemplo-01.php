<?php

//PDO trabalha também com transações. (ou td da certo, ou interrompe a transação inteira)

//root e root é o user e senha
//mysql seria o dbType.. poderia ser sqlserver, etc...
$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "root");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);//fetch_assoc pra ñ trazer os índices...

//key é o nome da coluna.. value é o valor em si
foreach ($results as $row) {

    foreach ($row as $key => $value) { 
        echo "<strong>" . $key . ": </strong>" . $value . "<br>";
    }

    echo "===================================================<br>";
}


var_dump($results);
?>