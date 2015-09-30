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
			SELECT n.id_noticia as id_noticia,  n.titulo as Titulo, i.ruta as Ruta
	        FROM noticias n  
	        INNER JOIN imagenes i ON (n.id_imagen = i.id_imagen)
	        WHERE(n.id_categoria = '".$categoria."')        		
        ");			
	}
	
	public function load_NovedadesAdmin() 
	{			
		return $this->query("
			SELECT n.id_noticia as id_noticia,  n.titulo as Titulo, i.ruta as Ruta, c.nombre as Categoria
	        FROM noticias n INNER JOIN imagenes i ON (n.id_imagen = i.id_imagen) 
	        INNER JOIN categorias c ON(n.id_categoria = c.id_categoria)        		
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

	public function load_Novedad($id_noticia) 
	{			
		return $this->query("
			SELECT n.id_noticia as id_noticia,  n.titulo as Titulo, n.contenido as Contenido, 
                            i.ruta as Ruta
	        FROM noticias n  
	        INNER JOIN imagenes i ON (n.id_imagen = i.id_imagen)
	        WHERE(n.id_noticia = '".$id_noticia."')        		
        ");			
	}

	/*Funciones que utiliza el administrador!!!!*/

	public function agregarImagen($url_img){
		return $this->query("

			INSERT INTO imagenes (ruta)
					VALUES ('$url_img')
		");
	}

	public function obtenerIdImg($url_img){
		return $this->query("
			SELECT i.id_imagen
        	FROM imagenes i        
	        WHERE(i.ruta ='images/$url_img')        		
        ");	
	}

	public function agregarNovedad($titulo,$id_categoria,$contenido,$id_imagen){
		return $this->query("

			INSERT INTO noticias (titulo,id_categoria,contenido,id_imagen)
					VALUES ('$titulo','$id_categoria','$contenido','$id_imagen')
		");
	}
}

?>