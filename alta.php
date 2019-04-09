<?php
	$nombre = $_POST['nombre'];
	$apaterno = $_POST['apaterno'];
	$amaterno = $_POST['amaterno'];
	$correoe = $_POST['correoe'];
	$query = "INSERT INTO USUARIOS (nombre, apaterno, amaterno, correoe) VALUES ('$nombre', '$apaterno', '$amaterno', '$correoe')";
	$conn = pg_connect("host=127.0.0.1 port=5432 dbname=autodb user=user_auto password=hola123.,") or die (pg_last_error());
	$result = pg_query($conn, $query) or die (pg_last_error());
	pg_close($conn);
?>
