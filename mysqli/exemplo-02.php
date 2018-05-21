<?php

//servidor, usuario, senha, banco de dados
$conn = new mysqli("localhost", "root", "root", "dbphp7");

if($conn->connect_error){
    echo "Error: " . $conn->connect_error;
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = [];

//Retorna um dado, se ele existir (e atribui na variavel row)
//Enquanto tiver resultado do banco, executar...
// while($row = $result->fetch_array()) {
// while($row = $result->fetch_array(MYSQLI_ASSOC)) { //Traz sem os index
while($row = $result->fetch_assoc()) { //Mesma coisa da linha de cima

    array_push($data, $row);

    // var_dump($row);
}

echo json_encode($data);

?>