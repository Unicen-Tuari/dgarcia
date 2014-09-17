<?php
	//Configuración
	$host 	= "localhost";
	$db	= "campoactivo";
	$user	= "root";
	$pass	= "";

	//Conexión
	$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
	echo $_POST;
	$nombre = $_POST["nombre"];
	$tipo 	= $_POST["tipo"];
	$modelo = $_POST["modelo"];
	$estado = $_POST["estado"];
	$ruta 	= $_POST["ruta"];
	$precio = $_POST["precio"];
	$texto 	= $_POST["texto"];

	//Consulta - Parametros Posicionales
	$sql_cont = "INSERT INTO contenido (nombre,texto)
					VALUES (:nombre,:texto)";

	$sqlID = "SELECT id_contenido
				FROM contenido
				ORDER BY id_contenido DESC";

	$sql_img = "INSERT INTO imagenes (id_contenido,ruta)
					VALUES (:id_contenido,:ruta)";

	$sql_maq = "INSERT INTO maquinas (id_contenido, estado, modelo, tipo, precio)
					VALUES (:id_contenido, :estado, :modelo, :tipo, :precio)";

	$q = $conn->prepare($sql_cont);
	$q->execute(array(':nombre'=>$nombre,':texto'=>$texto));

	//Ejecucion
	$ultID	= $conn->query($sqlID);


	//Si es null, hubo un error
	if(!$ultID)
	{
	  die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo());
	}

	$contenido = $ultID->fetch();
	$idcont = $contenido['id_contenido'];

	$q_img = $conn->prepare($sql_img);
	$q_img->execute(array(':id_contenido'=>$idcont,':ruta'=>$ruta));             


	$q_maq = $conn->prepare($sql_maq);
	$q_maq->execute(array(':id_contenido'=>$idcont,':estado'=>$estado,
						':modelo'=>$modelo,':tipo'=>$tipo,':precio'=>$precio));

	header("Location: cargaMaquinas.php");
	die();

?>