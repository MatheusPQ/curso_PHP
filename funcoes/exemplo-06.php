<?php

$pessoa = array(
    'nome' => 'João',
    'idade' => 20
);

foreach ($pessoa as &$value) { //Passando por referência

    if(gettype($value) === 'integer') $value += 10;
    echo $value.'<br>';
}

print_r($pessoa);

?>