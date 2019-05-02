<?php
$directorio = "img/";
$archivo = $directorio . basename($_FILES["imagen"]["name"]);
$uploadOk = 1;
$tipo = strtolower(pathinfo($archivo,PATHINFO_EXTENSION));
//Verificar si es una imagen
if(isset($_POST["submit"])) {
	$check = getimagesize($_FILES["imagen"]["tmp_name"]);
	if($check !== false) {
		echo "El archivo es una imagen - " . $check["mime"] . ".";
		$uploadOk = 1;
	} 
	else {
		echo "File is not an image.";
		$uploadOk = 0;
	}
}
// Verificar si el archivo existe
if (file_exists($archivo)) {
	echo "El archivo ya existe.";
	$uploadOk = 0;
}
// Verificar el tamaño del archivo
if ($_FILES["imagen"]["size"] > 500000) {
	echo "El archivo es muy grande.";
	$uploadOk = 0;
}
// Permitir solo ciertos tipos de archivo
if($tipo != "jpg" && $tipo != "png" && $tipo != "jpeg" && $tipo != "gif" ) {
	echo "Solo los archivos JPG, JPEG, PNG y GIF están permitidos.";
	$uploadOk = 0;
}
// Verificar si $uploadOk es 0 por algun error
if ($uploadOk == 0) {
	echo "Sorry, your file was not uploaded.";
// Si no hay error, intenta subir el archivo
} else {
	if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
		echo "El archivo ". basename($_FILES["imagen"]["name"]). " fue subido.";
	}
	else {
		echo "Error al subir el archivo.";
	}
}
?>
