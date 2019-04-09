<?php
//inicio de sesion:
session_start();
//Recibe valores:
$nombre = $_POST['username'];
$pass = $_POST['password'];
//Valores:
$mi_nombre = "aaguilar";
$mi_password = "hola";
//Condicional para inicio de sesion:
if(($nombre == $mi_nombre) && ($pass == $mi_password)){
	$_SESSION['id'] = 1;
	header('Location: menu.php');
}
else{
	//regresar al login.php:
	session_destroy();
	header('Location: inicio.php');
}
?>
