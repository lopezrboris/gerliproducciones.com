<?php
	$nombre = $_POST['nombre'];
	$correo_visitante = $_POST['correoVisitante'];
	$mensaje = $_POST['mensaje'];

	$de = 'ventas@gerliproducciones.com';
	$asunto = 'NUEVO CONTACTO DESDE GERLIPRODUCCIONES.COM';
	$cuerpo = "Nombre visitante: $nombre.\n".
		"Correo visitante: $correo_visitante.\n".
		"Mensaje: $mensaje.\n";

	$para = "contacto@gerliproducciones.com";
	$cabeceras = "From: $de \r\n";
	$cabeceras .= "Reply-To: $correo_visitante \r\n";
	mail($para,$asunto,$cuerpo,$cabeceras);
	header("Location: index.html");
?>
