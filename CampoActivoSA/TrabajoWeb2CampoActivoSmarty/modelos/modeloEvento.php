<?php

include_once "modelodb.php";

class Evento extends ModeloDB{
	
	
	public function load()
	{
		// return $this->query("select c.id_contenido as id_Contenido, c.nombre as Nombre,e.fecha as 									Fecha, e.ubicacion as Ubicacion, c.texto as Texto
		//     				from evento e  
		//         			join contenido c on (c.id_contenido = e.id_contenido)
		//         			join imagenes i on (e.id_contenido = i.id_contenido)
		//     				where (c.id_contenido = e.id_contenido)");
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
	
}

?>
