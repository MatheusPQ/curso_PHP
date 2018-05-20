<?php

$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Fulano","idade":25}]';

$data = json_decode($json, true); //true para transformar em array.. senão vai transformar em objeto

var_dump($data);
?>