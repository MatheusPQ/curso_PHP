<?php

//Tenta funcionar mesmo seo arquirov n existir, ou com algum problema.
//Tem mais recursos
//Tem um diretório padrão (include path), onde vai procurar os arquivos especificados,
//caso ñ encontre no caminho especificado.
//Tbm permite incluir arquivos de um outro site. (meio perigoso...)
// include "inc/exemplo-01.php";

//Obriga que o arquivo exista e que o arquivo esteja funcionando corretamente.
//Senão gera um erro fatal, e para a execução do código.
//NO PHP 7, um erro fatal ñ interrompe a execução do código.. 
//Ai pode usar um try catch.
// require "inc/exemplo-01.php";

//Mesmo que o require, porém garante que o arquivo seja chamado apenas uma vez
require_once "inc/exemplo-01.php";
//Logo, esse segundo require do mesmo arquivo ñ será executado.
require_once "inc/exemplo-01.php";
$resultado = somar(10, 25);

echo $resultado;
    
?>