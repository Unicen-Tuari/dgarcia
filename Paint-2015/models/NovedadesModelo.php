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
                            i.ruta, n.categoria
        	FROM noticias n  
            INNER JOIN imagenes i ON (n.id_noticia = i.id_noticia)
		   	WHERE(n.categoria = '$categoria')
        	GROUP BY n.id_noticia	
        ");			
	}
}

?>