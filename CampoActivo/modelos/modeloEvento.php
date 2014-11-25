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

	// public function load_ResParcialesE($q) 
	// {			
	// 	return $this->query("
	// 		SELECT COUNT(1) AS Cantidad                            
 //        	FROM contenido c  
 //        	INNER JOIN evento e ON (c.id_contenido = e.id_contenido) 
 //            WHERE((c.nombre LIKE '%".$q."%')||(c.texto LIKE '%".$q."%'))        	
 //        ");

	// }	


	// public function load_ResFinalesE($q) 
	// {			
	// 	return $this->query("

	// 		SELECT c.id_contenido as id_Contenido,  c.nombre as Nombre, c.texto as Texto, 
 //                            e.modelo as Modelo, e.tipo as Tipo, e.precio as Precio, e.id_contenido, i.Ruta, e.estado
 //        	FROM evento e 
 //            INNER JOIN contenido c ON (c.id_contenido = e.id_contenido)
 //            INNER JOIN imagenes i ON (e.id_contenido = i.id_contenido)
	// 	   	WHERE((c.nombre LIKE '%".$q."%')||(c.texto LIKE '%".$q."%')||(e.ubicacion LIKE '%".$q."%'))
 //        	GROUP BY e.id_contenido			     	
 //        ");

	// }	

	public function busqueda($q) 
	{	
		return $this->query("
			SELECT c.id_contenido AS id_Contenido, c.nombre AS Nombre,e.fecha AS Fecha, e.ubicacion AS Ubicacion, 
			c.Texto AS Texto, i.Ruta
			FROM evento e  
			INNER JOIN contenido c ON (c.id_contenido = e.id_contenido)
			INNER JOIN imagenes i ON (e.id_contenido = i.id_contenido)
			WHERE((Nombre LIKE '%".$q."%')||(Texto LIKE '%".$q."%')
				||(Ubicacion LIKE '%".$q."%')||(Fecha LIKE '%".$q."%'))
			GROUP BY e.id_contenido		     	
		");	
	}	
}

?>
