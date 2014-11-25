<?php

include_once "modelodb.php";

class Maquina extends ModeloDB
{
	public function load()	
	{			

	}

	public function load_Maq($estado) 
	{			
		return $this->query("
			SELECT c.id_contenido as id_Contenido,  c.nombre as Nombre, c.texto as Texto, 
                            m.modelo as Modelo, m.tipo as Tipo, m.precio as Precio, m.id_contenido, i.Ruta, m.estado
        	FROM maquinas m  
            INNER JOIN contenido c ON (c.id_contenido = m.id_contenido)
            INNER JOIN imagenes i ON (m.id_contenido = i.id_contenido)
		   	WHERE(m.estado = '$estado')
        	GROUP BY m.id_contenido	
        ");			
	}

	public function load_ImgMaq($id_maq)	
	{			
		return $this->query("
			SELECT i.id_contenido as id_Contenido, i.ruta as Ruta
        	FROM imagenes i
           	WHERE (i.id_contenido = '$id_maq')
        	
    	");
	}
	
	// public function load_ResParciales($q) 
	// {	
 //        return $this->query("
	// 		SELECT COUNT(1) AS Cantidad                            
 //        	FROM contenido c  
 //        	INNER JOIN maquinas m ON (c.id_contenido = m.id_contenido) 
 //            WHERE((c.nombre LIKE '%".$q."%')||(c.texto LIKE '%".$q."%')||(m.tipo LIKE '%".$q."%')||(m.modelo LIKE '%".$q."%'))        	
 //        ");

	// }	

	public function load_ResFinales($q) 
	{			
		return $this->query("
			SELECT c.id_contenido as id_Contenido,  c.nombre as Nombre, c.texto as Texto, 
                            m.modelo as Modelo, m.tipo as Tipo, m.precio as Precio, m.id_contenido, i.Ruta, m.estado
            FROM contenido c
        	INNER JOIN maquinas m ON (c.id_contenido = m.id_contenido)
            LEFT JOIN imagenes i ON (c.id_contenido = i.id_contenido)
		   	WHERE((c.nombre LIKE '%".$q."%')||(c.texto LIKE '%".$q."%')
		   		||(m.tipo LIKE '%".$q."%')||(m.modelo LIKE '%".$q."%')
		   		||(m.estado LIKE '%".$q."%'))
        	GROUP BY c.id_contenido			     	
        ");
	}

	public function busqueda($q) 
	{	
		return $this->query("
			SELECT c.id_contenido as id_Contenido,  c.nombre as Nombre, c.texto as Texto, 
			m.modelo as Modelo, m.tipo as Tipo, m.precio as Precio, m.id_contenido, i.Ruta, m.estado as Estado
			FROM contenido c
			INNER JOIN maquinas m ON (c.id_contenido = m.id_contenido)
			LEFT JOIN imagenes i ON (c.id_contenido = i.id_contenido)
			WHERE((c.nombre LIKE '%".$q."%')||(c.texto LIKE '%".$q."%')
				||(m.tipo LIKE '%".$q."%')||(m.modelo LIKE '%".$q."%')
				||(m.estado LIKE '%".$q."%'))
			GROUP BY c.id_contenido			     	
		");	
	}
}

?>
