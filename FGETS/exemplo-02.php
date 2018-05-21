<?php

$filename = "Imagem1.jpg";

$base64 = base64_encode(file_get_contents($filename)); 
//Lê o conteudo inteiro de um arq.
//file_get_contents retorna binário.. usa-se base64_encode p/ converter p/ texto

$fileinfo = new finfo(FILEINFO_MIME_TYPE); //Vai pedir o tipo do arq.
$mimetype = $fileinfo->file($filename);



//Vai retornar um texto gigante..
//Copia esse texto e cola na barra de URL no navegador, vai mostrar a imagem!
// echo "data:image/jpg;base64,".$base64;
// echo "data:".$mimetype.";base64,".$base64;
$base64encode = "data:".$mimetype.";base64,".$base64;



?>

<a href="<?=$base64encode?>" target="_blank">Link p/ imagem</a>
<img src="<?=$base64encode?>" alt="">