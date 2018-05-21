<?php

$cep = "01310100";
$link = "https://viacep.com.br/ws/01310100/json/";

$ch = curl_init($link);

//curlopt... diz que se espera um retorno da informação enviada
//1 espera uma resposta de volta 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//Questão do HTTPS, do certificado...
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$response = curl_exec($ch);

curl_close($ch);

//Decodifica e transforma em array
$data = json_decode($response, true);

print_r($data["localidade"]);
?>