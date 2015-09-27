<?php

include_once "modelodb.php";

class Novedades extends ModeloDB
{
	public function load()	
	{			

	}

	public function load_Novedades($categoria) 
	{			
		return $this->query("
			SELECT n.id_noticia as id_noticia,  n.titulo as Titulo, n.contenido as Contenido, 
                            i.ruta as Ruta
	        FROM noticias n  
	        INNER JOIN imagenes i ON (n.id_noticia = i.id_noticia)
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