<?php

$image = imagecreatefromjpeg("Certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

//terceiro par é o angulo. 0 p/ ficar na horizontal
imagettftext(
    $image, 
    32, //Tamanho da fonte
    0, //Angulo
    320, 
    250, 
    $titleColor, //Cor
    "fonts".DIRECTORY_SEPARATOR."Bevan". DIRECTORY_SEPARATOR . "Bevan-Regular.ttf", //Fonte
    "CERTIFICADO" //Texto em si
);
imagettftext(
    $image, 
    32, 
    0, 
    375, 
    350, 
    $titleColor,
    "fonts".DIRECTORY_SEPARATOR."Playball". DIRECTORY_SEPARATOR . "Playball-Regular.ttf", //Fonte
    "Fulano Ciclano"
);
imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ".date("d/m/Y")), $titleColor);

header("Content-type: image/jpeg");

//Segundo parâmetro é o nome do arquivo, caso queira gerar um.
//Se não fornece-lo, vai apenas mostrar a imagem na tela.

//Terceiro é a qualidade da imagem, de uma escala de 0 a 100.
imagejpeg($image);
imagedestroy($image);

?>