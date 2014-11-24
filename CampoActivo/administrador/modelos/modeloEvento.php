<?php

include_once "modelodb.php";

class Evento extends ModeloDB
{
	
	
	public function load()
	{		
		return $this->query("
			SELECT c.id_contenido AS id_Contenido, c.nombre AS Nombre,e.fecha AS Fecha, e.ubicacion AS Ubicacion, 
			c.Texto AS Texto, e.id_contenido, i.Ruta
			FROM evento e  
			INNER JOIN contenido c ON (c.id_contenido = e.id_contenido)
			INNER JOIN imagenes i ON (e.id_contenido = i.id_contenido)
			GROUP BY e.id_contenido
		");
	}

	public function load_ImgEvento($id)	
	{			
		return $this->query("
			select e.id_contenido as id_Contenido, i.ruta as Ruta
			from imagenes i
			join evento e on (e.id_contenido = i.id_contenido)
			where (e.id_contenido = $id)
    	");
	}

	public function insertarContenidoEvento($nombre,$texto)
	{
		return $this->query("
			INSERT INTO contenido (nombre,texto)
					VALUES ('$nombre','$texto')
		");
	}

	public function obtenerID_ContenidoEvento()
	{
		$datos =  $this->query("
			SELECT id_contenido
					FROM contenido
					ORDER BY id_contenido ASC
		");

		$id = array_pop ($datos); //Obtiene el ultimo dato del arreglo.....
		return $id['id_contenido'];
	}

	public function insertarImagenesEvento($id_contenido,$ruta)
	{
		return $this->query("
			INSERT INTO imagenes (id_contenido,ruta)
						VALUES ('$id_contenido','$ruta')
		");
	}

	public function insertarEvento($id_contenido,$fecha,$ubicacion)
	{
		return $this->query("
			INSERT INTO evento (id_contenido,fecha,ubicacion)
					VALUES ('$id_contenido','$fecha','$ubicacion')
		");
	}

	public function eliminarContenidoEvento($nombre,$texto)
	{
		return $this->query("
			DELETE evento
			FROM table_sources
			WHERE (nombre = '$nombre') AND (texto = '$texto')
		");
	}

	// public function modificarID_ContenidoEvento()
	// {
	// 	$datos =  $this->query("
	// 		SELECT id_contenido
	// 				FROM contenido
	// 				ORDER BY id_contenido ASC
	// 	");

	// 	$id = array_pop ($datos); //Obtiene el ultimo dato del arreglo.....
	// 	return $id['id_contenido'];
	// }

	// public function insertarImagenesEvento($id_contenido,$ruta)
	// {
	// 	return $this->query("
	// 		INSERT INTO imagenes (id_contenido,ruta)
	// 					VALUES ('$id_contenido','$ruta')
	// 	");
	// }

	// public function insertarEvento($id_contenido,$fecha,$ubicacion)
	// {
	// 	return $this->query("
	// 		INSERT INTO evento (id_contenido,fecha,ubicacion)
	// 				VALUES ('$id_contenido','$fecha','$ubicacion')
	// 	");
	// }


}

?>
