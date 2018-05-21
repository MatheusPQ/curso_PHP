<?php

require_once("config.php");

// $sql = new Sql();

// //Método na classe Sql
// $usuarios = $sql->select("SELECT * FROM tb_usuarios");

// echo json_encode($usuarios);

//Carrega 1 user
// $root = new Usuario();
// $root->loadById(3);
//echo $root;

//Carrega uma lista de users
// $lista = Usuario::getList();
// echo json_encode($lista);

//Carrega lista buscando pelo login de usuario
// $search = Usuario::search("jo");
// echo json_encode($search);

//Carregar um user usando login e senha
// $usuario = new Usuario();
// $usuario->login("Joaao", "123");
// echo $usuario; //Evoca o __toString

// $aluno = new Usuario("aluno2", "12345");
// $aluno->setDeslogin("aluno");
// $aluno->setDessenha("54321");

//Criando um novo usuário
// $aluno->insert();
// echo $aluno;

//Alterar um usuario
// $usuario = new Usuario();
// $usuario->loadById(8);
// $usuario->update("professor", "111");
// echo $usuario;

//Deletar um usuário
// $usuario = new Usuario();
// $usuario->loadById(7);
// $usuario->delete();
// echo $usuario;

?>