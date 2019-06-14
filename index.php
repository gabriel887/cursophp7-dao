<?php
	
	require_once("config.php");

	/* Mostra todos os usuarios
	$sql = new Sql();

	$usuarios = $sql->select("SELECT * FROM tb_usuarios");

	echo json_encode($usuarios);
	*/

	/*Carrega um usuário
	$user = new Usuario();

	$user->loadById(1);

	echo $user;

	*/

	/*Carrega uma lista de usuários. Todos.
	$lista = Usuario::getList();

	echo json_encode($lista);*/


	/* Carrega uma lista de usuários buscando pelo login
	$search = Usuario::search("e");

	echo json_encode($search);

	*/

	//Carrega um usuário utilizando de login e senha
	$usuario = new Usuario();
	$usuario->login("user", "1534562");

	echo $usuario;
?>