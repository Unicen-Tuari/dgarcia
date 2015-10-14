<?php

include_once "modelodb.php";

class Novedades extends ModeloDB
{

	private $noticias;
  	private $db;

	  function __construct() {
	      $this->db = new PDO('mysql:host=localhost;dbname=paint;charset=utf8', 'root', '');
	      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  }
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
	
  	private function subirImagenes($imagenes){

	    $carpeta = "uploads/images/";
	    $destinos_finales = array();
	    foreach ($imagenes["tmp_name"] as $key => $value){
	      $destinos_finales[] = $carpeta.uniqid().$imagenes["name"][$key];
	      move_uploaded_file($value, end($destinos_finales));
	    }
	    return $destinos_finales;
  	}

	function getNoticias(){

	    $noticias = array();
	    $consulta = $this->db->prepare("SELECT * FROM noticias");
	    $consulta->execute();
	//Todas las noticias
	    while($noticia = $consulta->fetch(PDO::FETCH_ASSOC)){
	      $consultaImagenes = $this->db->prepare("SELECT * FROM imagenes where fk_id_noticia=?");
	      $consultaImagenes->execute(array($noticia['id_noticia']));
	      $imagenes_noticia = $consultaImagenes->fetchAll();
	      $noticia['imagenes'] = $imagenes_noticia;
	      $noticias[]=$noticia;
	    }
	    return $noticias;
  	}

  	function agregarNoticia($titulo, $contenido, $imagenes, $id_categoria = 1){
	
		  $destinos_finales=$this->subirImagenes($imagenes);
		//Inserto la noticia
		  $this->db->beginTransaction();
		  $consulta = $this->db->prepare('INSERT INTO noticias(titulo,contenido,id_categoria) VALUES(?,?,?)');
		  $consulta->execute(array($titulo,$contenido,$id_categoria));
		  $id_noticia = $this->db->lastInsertId();
		//Insertar las imagenes
		  foreach ($destinos_finales as $key => $value){
		   	$consulta = $this->db->prepare('INSERT INTO imagenes(fk_id_noticia,ruta) VALUES(?,?)');
		    $consulta->execute(array($id_noticia, $value));
		   }
		   $this->db->commit();		  
  	}

	function borrarNovedad($id_noticia){

		$consulta = $this->db->prepare('DELETE FROM imagenes WHERE fk_id_noticia=?');
	    $consulta->execute(array($id_noticia));
	  	$consulta1 = $this->db->prepare('DELETE FROM noticias WHERE id_noticia=?');
	    $consulta1->execute(array($id_noticia));
	}

	private function subirImagenesAjax($imagenes){

	   $carpeta = "uploads/images/";
	   $destinos_finales = array();
	   foreach ($imagenes as $imagen){
	      $destino =  $carpeta.uniqid().$imagen["name"];
	      move_uploaded_file($imagen["tmp_name"], $destino);
	      $destinos_finales[] = $destino;
	    }
	   return $destinos_finales;
	}

  	function agregarImagenes($id_noticia, $imagenes){

	    $rutas=$this->subirImagenesAjax($imagenes);
	    $consulta = $this->db->prepare('INSERT INTO imagenes(fk_id_noticia,ruta) VALUES(?,?)');
	    foreach($rutas as $ruta){
	      $consulta->execute(array($id_noticia,$ruta));
    }
  }
}

?>