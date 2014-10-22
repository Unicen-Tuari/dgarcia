<?php

include_once "modelodb.php";

class Maquina extends ModeloDB{
	
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

	public function load_ImgMaq($estado,$id_maq)	
	{			
		return $this->query("
			SELECT m.id_contenido as id_Contenido, i.ruta as Ruta
        	FROM imagenes i
            JOIN maquinas m ON (m.id_contenido = i.id_contenido)
        	WHERE ((m.estado = '$estado') and (m.id_contenido = $id_maq))
        	
    	");
	}

	public function load_ResParciales($q) 
	{	
        return $this->query("
			SELECT COUNT(1) AS Cantidad                            
        	FROM contenido c  
        	LEFT JOIN maquinas m ON (c.id_contenido = m.id_contenido) 
        	LEFT JOIN evento e ON (c.id_contenido = e.id_contenido) 
            WHERE((c.nombre LIKE '%".$q."%')||(c.texto LIKE '%".$q."%')||(m.tipo LIKE '%".$q."%'))        	
        ");

	}	

	public function load_ResFinales($q) 
	{			
		return $this->query("
			SELECT c.id_contenido as id_Contenido,  c.nombre as Nombre, c.texto as Texto, 
                            m.modelo as Modelo, m.tipo as Tipo, m.precio as Precio, m.id_contenido, i.Ruta, m.estado
            FROM contenido c
        	LEFT JOIN maquinas m ON (c.id_contenido = m.id_contenido)
        	LEFT JOIN evento e ON (c.id_contenido = e.id_contenido) 
            INNER JOIN imagenes i ON (c.id_contenido = i.id_contenido)
		   	WHERE((c.nombre LIKE '%".$q."%')||(c.texto LIKE '%".$q."%')||(m.tipo LIKE '%".$q."%'))
        	GROUP BY c.id_contenido			     	
        ");
	}	

}

?>
