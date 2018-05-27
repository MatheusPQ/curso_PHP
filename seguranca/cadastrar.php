<?php

$email = $_POST['inputEmail'];

// var_dump($_POST);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); //Ñ precisa verificar se é SSL
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
    "secret"=>"6LdevFsUAAAAADsBoWklF4PRSh9XhzZHmVEdsgao",
    "response"=>$_POST['g-recaptcha-response'],
    "remoteip"=>$_SERVER["REMOTE_ADDR"]
))); //

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //Espera um retorno da URL

$recaptcha = json_decode(curl_exec($ch), true);//True p/ ser array

curl_close($ch);

if($recaptcha["success"] === true){
    echo "OK: ".$_POST['inputEmail'];
} else {
    header("Location: exemplo-04.php");
}

?>