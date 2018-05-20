<?php

$pessoas = array();

//Inserir um item no array, após ele estrar criado.
array_push($pessoas, array(
    'nome' => 'João',
    'idade'=> 20
));
array_push($pessoas, array(
    'nome' => 'Fulano',
    'idade'=> 25
));

echo json_encode($pessoas);

?>