<?php
	$nombre = $_POST['nombre'];
	$apaterno = $_POST['apaterno'];
	$amaterno = $_POST['amaterno'];
	$correoe = $_POST['correoe'];

	$query = "INSERT INTO USUARIOS (nombre, apaterno, amaterno, correo) VALUES ('$nombre', '$apaterno', '$amaterno', '$correoe')";

	$conn = pg_connect("127.0.0.1 5432 autobd user_auto XXXX") or die (pg_last_error());

	$result = pg_query($conn, $query) or die (pg_last_error());

	pg_close($conn);
?>
