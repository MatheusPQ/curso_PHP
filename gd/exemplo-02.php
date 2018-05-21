<?php

$image = imagecreatefromjpeg("Certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
imagestring($image, 5, 440, 350, "Fulano Ciclano", $titleColor);
imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ".date("d/m/Y")), $titleColor);

header("Content-type: image/jpeg");

//Segundo parâmetro é o nome do arquivo, caso queira gerar um.
//Se não fornece-lo, vai apenas mostrar a imagem na tela.

//Terceiro é a qualidade da imagem, de uma escala de 0 a 100.
imagejpeg($image, "certificado-".date("Y-m-d").".jpg", 10);
imagedestroy($image);

?>