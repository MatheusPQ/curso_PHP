<?php

$data = array(
    "empresa"=>"HCode"
);

//time + 3600. Hora de agora + 1 hora
setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

echo "OK";
?>