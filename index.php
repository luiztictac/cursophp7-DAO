<?php 

require_once("config.php");


$user= new Usuario();
$user-> loadbyId(1);
echo $user;

/*
$sql = new Sql();

$usuarios = $sql-> select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

?>