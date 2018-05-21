<?php

header("Content-type: image/jpeg");

$file = "wallpaper.jpg";
$new_width = 256;
$new_height = 256;

// $data = getimagesize($file);

// $width = $data[0];
// $height = $data[1];

//?...
list($old_width, $old_height) = getimagesize($file);

//Carrega paleta de 16 milhões de cores
$new_image = imagecreatetruecolor($new_width, $new_height);
$old_image = imagecreatefromjpeg($file);

imagecopyresampled(
    $new_image, //nova imagem, destino
    $old_image, //imagem de origem
    0, //x destino
    0,// y destino
    0, // x origem
    0,// y origem
    $new_width, //largura imagem destino
    $new_height, //altura imagem destino
    $old_width, //largura imagem origem
    $old_height //altura imagem origem
);

//Ao salvar, pode-se verificar que a imagem ficou pequena!
imagejpeg($new_image);

imagedestroy($old_image);
imagedestroy($new_image);

?>