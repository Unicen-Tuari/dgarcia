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

	public function datos_Evento($id_contenido) 
	{			
		return $this->query("
			SELECT c.id_contenido as id_Contenido,  c.nombre as Nombre, c.texto as Texto, 
                            e.fecha as Fecha, e.ubicacion as Ubicacion,
                            e.id_contenido, i.Ruta,i.id_contenido
        	FROM evento e 
            INNER JOIN contenido c ON (c.id_contenido = e.id_contenido)
            INNER JOIN imagenes i ON (e.id_contenido = i.id_contenido)
		   	WHERE e.id_contenido = '$id_contenido'
        	GROUP BY e.id_contenido	
        ");			
	}

	public function modificarContenidoE($nombre,$texto,$id_contenido)
	{
		return $this->query("
			UPDATE contenido
			SET nombre = '$nombre',texto = '$texto'
            WHERE (id_contenido = '$id_contenido')
		");
	}	

	public function modificarImagenesE($id_contenido,$ruta)
	{
		return $this->query("
			UPDATE imagenes
			SET id_contenido = '$id_contenido',ruta = '$ruta'
			WHERE (id_contenido = '$id_contenido')
		");
	}

	public function modificarE($id_contenido,$fecha,$ubicacion)
	{
		return $this->query("
			UPDATE evento 
			SET id_contenido = '$id_contenido', fecha = '$fecha', ubicacion = '$ubicacion'
			WHERE (id_contenido = '$id_contenido')
		");
	}

	public function eliminarContenidoE($id_contenido)
	{
		return $this->query("
			DELETE FROM contenido			
            WHERE (id_contenido = '$id_contenido')
		");
	}	

	public function eliminarImagenesE($id_contenido)
	{
		return $this->query("
			DELETE FROM imagenes
			WHERE (id_contenido = '$id_contenido')
		");
	}

	public function eliminarE($id_contenido)
	{
		return $this->query("
			DELETE FROM evento
			WHERE WHERE (id_contenido = '$id_contenido')
		");
	}
}

?>
