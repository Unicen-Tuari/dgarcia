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
        	INNER JOIN maquinas m ON (c.id_contenido = m.id_contenido) 
            WHERE((c.nombre LIKE '%".$q."%')||(c.texto LIKE '%".$q."%')||(m.tipo LIKE '%".$q."%')||(m.modelo LIKE '%".$q."%'))        	
        ");

	}	

	public function load_ResFinales($q) 
	{			
		return $this->query("
			SELECT c.id_contenido as id_Contenido,  c.nombre as Nombre, c.texto as Texto, 
                            m.modelo as Modelo, m.tipo as Tipo, m.precio as Precio, m.id_contenido, i.Ruta, m.estado
            FROM contenido c
        	INNER JOIN maquinas m ON (c.id_contenido = m.id_contenido)
            LEFT JOIN imagenes i ON (c.id_contenido = i.id_contenido)
		   	WHERE((c.nombre LIKE '%".$q."%')||(c.texto LIKE '%".$q."%')||(m.tipo LIKE '%".$q."%')||(m.modelo LIKE '%".$q."%'))
        	GROUP BY c.id_contenido			     	
        ");
	}


	public function insertarContenidoMaq($nombre,$texto)
	{
		return $this->query("
			INSERT INTO contenido (nombre,texto)
					VALUES ('$nombre','$texto')
		");
	}

	public function obtenerID_ContenidoMaq()
	{
		$datos =  $this->query("
			SELECT id_contenido
					FROM contenido
					ORDER BY id_contenido ASC
		");

		$id = array_pop ($datos); //Obtiene el ultimo dato del arreglo.....
		return $id['id_contenido'];
	}

	public function insertarImagenesMaq($id_contenido,$ruta)
	{
		return $this->query("
			INSERT INTO imagenes (id_contenido,ruta)
						VALUES ('$id_contenido','$ruta')
		");
	}

	public function insertarMaq($id_contenido,$estado,$modelo,$tipo,$precio)
	{
		return $this->query("
			INSERT INTO maquinas (id_contenido, estado, modelo, tipo, precio)
					VALUES ('$id_contenido','$estado', '$modelo', '$tipo', '$precio')
		");
	}	
}

?>
