<?php
echo "Envío de correo electrónico";

$para      = 'angie.aguilar.dominguez@gmail.com';
$titulo    = 'Alta de usuario';
$mensaje   = 'Hola, gracias por registrarte en nuestro sitio.';
$cabeceras = 'From: webmaster@example.com' . "\r\n" .
	    'Reply-To: webmaster@example.com' . "\r\n" .
	        'X-Mailer: PHP/' . phpversion();

$exito = mail($para, $titulo, $mensaje, $cabeceras);
if(!$exito){
	$errorMessage = error_get_last()['message'];
}
?>
