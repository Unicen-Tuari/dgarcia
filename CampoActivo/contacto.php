<?php

	$Nombre = $_POST["nombre"];
	$Correoelectronico = $_POST["email"];
	$Telefono = $_POST["telefono"];
	$Mensaje = $_POST["mensaje"];
	nuevoMensaje($Nombre,$Correoelectronico,$Telefono,$Mensaje);

?>