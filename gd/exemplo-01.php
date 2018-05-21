<?php

header("Content-Type: image/png");

//Largura/altura da tela em px
$image = imagecreate(256, 256);

//A primeira cor criada se torna a cor de fundo (imagem, r, g, b)
$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);

//imagem
//tam da fonte (max 5)
//Deslocamento da margem esquerda (em px)
//Deslocamento da margem superior (em px)
//texto em si
//cor do texto
imagestring($image, 5, 60, 120, "Curso do PHP 7", $red);

//Renderiza a imagem.
//Detalhe que tem que ser no formato definido la no header (png no caso)
imagepng($image);

imagedestroy($image);
?>