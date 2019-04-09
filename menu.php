<?php
session_start();
if($_SESSION['id'] == 1){
	echo "Se muestra el menu: ";
	echo "La variable de sesión: ".$_SESSION['id'];
}
else{
	header('Location: login.php');
	session_destroy();
}
?>
