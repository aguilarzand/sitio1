<?php
session_start();
	$id = $_SESSION['id'];
	$nombre = $_POST['nombre'];
	$apaterno = $_POST['apaterno'];
	$amaterno = $_POST['amaterno'];
	$correoe = $_POST['correoe'];
	$query = "UPDATE USUARIOS SET nombre='".$nombre."', apaterno='".$apaterno."', amaterno='".$amaterno."', correoe='".$correoe."' WHERE iduser=".$id;
	$conn = pg_connect("host=127.0.0.1 port=5432 dbname=autodb user=user_auto password=hola123.,") or die (pg_last_error());
	$result = pg_query($conn, $query) or die (pg_last_error());
	pg_close($conn);
	if($result){
		header('Location: listado.php');
	}
	else{
		echo "Error al actualizar los datos";
	}
?>
