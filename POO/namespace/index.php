<?php 

require_once("config.php");

use Cliente\Cadastro;

//Esse é o cadastro da pasta Cliente (devido ao namespace acima)
$cad = new Cadastro();

$cad->setNome("Djalma Sindeaux");
$cad->setEmail("djalma@hcode.com.br");
$cad->setSenha("123456");

// echo $cad;
$cad->registrarVenda();
?>