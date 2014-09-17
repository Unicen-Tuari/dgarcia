<?php
	//Configuración
	$host 	= "localhost";
	$db	= "campoactivo";
	$user	= "root";
	$pass	= "";

	//Conexión
	$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
	echo $_POST;
	$Nombre = $_POST["Nombre"];
	$Apellido = $_POST["Apellido"];
	$Telefono = $_POST["Telefono"];
	$Correoelectronico = $_POST["Correoelectronico"];
	$Cometario = $_POST["Cometario"];

	//Consulta
	$sql = "INSERT INTO contactos (Nombre,Apellido,Telefono,Correoelectronico,Cometario)
					 VALUES (:Nombre,:Apellido,:Telefono,:Correoelectronico,:Cometario)";
	$q = $conn->prepare($sql);
	$q->execute(array(':Nombre'=>$Nombre,':Apellido'=>$Apellido,':Telefono'=>$Telefono,
						':Correoelectronico'=>$Correoelectronico,':Cometario'=>$Cometario));

	header("Location: contacto.php");
	die();

?>