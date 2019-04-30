<?php
	$query = "SELECT iduser, nombre, apaterno, amaterno FROM USUARIOS";
	$conn = pg_connect("host=127.0.0.1 port=5432 dbname=autodb user=user_auto password=hola123.,") or die (pg_last_error());
	$result = pg_query($conn, $query) or die (pg_last_error());
	pg_close($conn);
?>
	<h3>Usuarios registrados</h3>
	<table>
		<tr>
			<th>Nombre</th>
			<th>Acción</th>
		</tr>
<?php
	while($row = pg_fetch_row($result)){
		echo "<tr><td>".$row[1]." ".$row[2]." ".$row[3]."</td><td><a href='editar.php?id=".$row[0]."'>Editar</a></td></tr>";
	}			
?>
	</table>
