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

	private function subirImagenesAjax($imagenes){
	    $carpeta = "uploads/images/";
	    $destinos_finales = array();
	    foreach ($imagenes as $imagen) {
	      $destino =  $carpeta.uniqid().$imagen["name"];
	      move_uploaded_file($imagen["tmp_name"], $destino);
	      $destinos_finales[] = $destino;
	    }
	    return $destinos_finales;
	}


	public function agregarNovedad($titulo, $imagenes, $detalle){
		$rutas=$this->subirImagenesAjax($imagenes);
		$consulta = $this->db->prepare('
			INSERT INTO imagenes(titulo,path,detalle) VALUES(?,?,?)
		');
		//foreach($rutas as $ruta){
		$consulta->execute(array($titulo,$ruta,$detalle));
		//}
	}
}

?>