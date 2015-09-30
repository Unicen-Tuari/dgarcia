<?php

include_once "modelodb.php";

class Galeria extends ModeloDB
{
	public function load()	
	{			

	}

	// public function load_Imagen($categoria) 
	// {			
	// 	return $this->query("
	// 		 SELECT i.ruta as Ruta
	//          FROM imagenes i
	//          WHERE(i.id_categoria = '".$categoria."')        		
 //        ");			
	// }

	public function load_Imagen($categoria) 
	{			
		return $this->query("
			 SELECT i.ruta as Ruta
	         FROM imagenes i 
	         INNER JOIN noticias n ON (n.id_imagen = i.id_imagen)
	         WHERE(n.id_categoria = '".$categoria."')        		
        ");			
	}
	
	public function load_Categoria($categoria) 
	{			
		return $this->query("
			SELECT c.nombre as Nombre
        	FROM categorias c         
	        WHERE(c.id_categoria = '".$categoria."')        		
        ");			
	}
}

?>