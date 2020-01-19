<?php 

require_once("config.php");

//carrega usuaro
//$user= new Usuario();
//$user-> loadbyId(1);
//echo $user;

/*
$sql = new Sql();

$usuarios = $sql-> select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/
//carrega uma lista de usuario
//$lista = Usuario::getlist();

//echo json_encode($lista);

//carrega uma lista de usuarios buscando leo login
//$search = Usuario::search("lo");
//echo json_encode($search);

//carrega um usuario usando o login e senha
$usuario = new Usuario();
$usuario->login("user","12345");

echo $usuario;

?>