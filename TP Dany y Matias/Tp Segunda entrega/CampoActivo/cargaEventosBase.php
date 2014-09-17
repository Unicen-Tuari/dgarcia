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
	$fecha = $_POST["fecha"];
	$ubicacion = $_POST["ubicacion"];
	$ruta = $_POST["ruta"];
	$texto = $_POST["texto"];

	//Consulta - Parametros Posicionales
	$sql_cont = "INSERT INTO contenido (nombre,texto)
					VALUES (:nombre,:texto)";

	$sqlID = "SELECT id_contenido
				FROM contenido
				ORDER BY id_contenido DESC";

	$sql_img = "INSERT INTO imagenes (id_contenido,ruta)
					VALUES (:id_contenido,:ruta)";

	$sql_evento = "INSERT INTO evento (id_contenido,fecha,ubicacion)
					VALUES (:id_contenido,:fecha,:ubicacion)";

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


	$q_evento = $conn->prepare($sql_evento);
	$q_evento->execute(array(':id_contenido'=>$idcont,':fecha'=>$fecha,':ubicacion'=>$ubicacion));

	header("Location: cargaEventos.php");
	die();

?>