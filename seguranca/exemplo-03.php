<?php

$pasta = "arquivos";
$permissao = "0775";

if(is_dir($pasta)) mkdir($pasta, $permissao);

echo "Diretório criado";
//0 - sem permissão
//1 - permisssão de execução
//2 - permissão de gravação
//3 -  junção do 1 e do 2 (executar e gravar)
//4 - só leitura
//5 - leitura e execução
//6 - leitura e gravação
//7 - leitura, execução e gravação (permissão total)

?>