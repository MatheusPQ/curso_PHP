<?php

//Caminho do arquivo+nome do arquivo, operação (leitura, escrita.. etc) 
//w+. w write, + vai criar o arquivo
//a+. preserva o conteudo, e adiciona no final do arquivo
$file = fopen("log.txt", "a+"); //file é uma variavel do tipo resource agora

//Recebe um resource (arq em si), 
fwrite($file, date("Y-m-d H:i:s"). "\r\n");

fclose($file);

echo "Arquivo criado com sucesso";

?>