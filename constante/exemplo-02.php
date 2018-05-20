<?php

//Array constante
define("BANCO_DE_DADOS", [
    '127.0.0.1',
    'root',
    'password',
    'test'
]);

// define("BANCO_DE_DADOS", [
//     '127.0.0.1',
//     'root',
//     'password',
//     'test'
// ], true); //se true, o nome da constante deixa de ser case-sensitive.. por convenção, deixar sem nada msm

print_r(BANCO_DE_DADOS);
?>