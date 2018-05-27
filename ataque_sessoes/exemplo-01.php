<?php

session_start();
//Se fechar o navegador e abrir de novo, vai gerar um id novo.

//Depois de verificar login e senha, reinicie o ID da sessão.
session_destroy();

session_start();

session_regenerate_id(); //Vai gerar um novo ID!

echo session_id();

?>