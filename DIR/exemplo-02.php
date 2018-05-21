<?php

//Vai ver o que tem no diretório
$images = scandir("images");
//. é o diretório local
//.. é o diretório acima

$data = array();

foreach ($images as $img) {
    if(!in_array($img, array(".", ".."))){
        $filename = "images" . DIRECTORY_SEPARATOR . $img;

        $info = pathinfo($filename);
        $info["size"] = filesize($filename); //Tamanho do arq em bytes
        $info["modified"] = date("d/m/Y H:i:s", filemtime($filename)); //data de modificação
        $info["url"] = "http://localhost/cursoPHP/DIR/".str_replace("\\", "/", $filename);      
        array_push($data, $info);
    }
}

echo json_encode($data);

?>