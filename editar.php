<!DOCTYPE html>
<meta charset="utf-8">
<html>
	<body>
<?php
session_start();
$_SESSION['id'] = $_GET['id'];
$query = "SELECT nombre, apaterno, amaterno, correoe FROM USUARIOS WHERE iduser=".$_SESSION['id'];
$conn = pg_connect("host=127.0.0.1 port=5432 dbname=autodb user=user_auto password=hola123.,") or die (pg_last_error());
$result = pg_query($conn, $query) or die (pg_last_error());
pg_close($conn);
$reg = pg_fetch_row($result);
?>
		<p>Datos existentes:</p>

		<form name="edita" action="update.php" method="post">

			<label for="nombre">Nombre: </label>

			<input type="text" name="nombre" value="<?php echo $reg[0]?>"><br />

			<label for="apaterno">Apellido paterno: </label>

			<input type="text" name="apaterno" value="<?php echo $reg[1]?>"><br />

			<label for="amaterno">Apellido materno: </label>

			<input type="text" name="amaterno" value="<?php echo $reg[2]?>"><br />

			<label for="email">Correo electrónico: </label>

			<input type="email" name="correoe" value="<?php echo $reg[3]?>"><br />

			<input type="submit" value="Submit">

		</form>

	</body>

</html>

