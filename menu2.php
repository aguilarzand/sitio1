<?php
session_start(); //Inicia una nueva sesión o reanuda la existente
require 'conexion.php'; //Agregamos el script de Conexión

//Evaluar si existe la variable de sesión id_usuario, si no existe redirigimos al inicio de sesion
if(!isset($_SESSION["id"])){
	header("Location: login.php");
}
					
$id = $_SESSION['id'];
//Consultar los datos del Usuario
 $sql = "SELECT idtipo, nombre FROM usuarios u, tipo_usuarios t WHERE u.idtipo=t.idtipo and u.iduser = ".$id;
$result=pg_query($sql,$conn);
$row = pg_fetch_row($result);							?>
<html>
	<head>
		<title>Bienvenido</title>
	</head>
	<body>
	<!-- Imprimir el nombre del usuario con datos de la consulta  -->
		<h1><?php echo 'Bienvenido '.$row['nombre']; ?></h1>
		<!-- Si es administrador muestra la opción para alta de usuarios  -->
		<?php if($row['idtipo']==1) { ?>		
		<a href="formulario.html">Registar usuario</a>
		<br />
		<?php } ?>
		<!-- Muestra la opción para Cerrar Sesión  -->
		<a href="logout.php">Cerrar Sesión</a>					</body>
</html>
