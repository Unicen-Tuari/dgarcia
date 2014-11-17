<?php
	
	include_once "modelodb.php";			

	class Contacto extends ModeloDB{

		public function load(){
			
		}
	
		public function nuevoMensaje($nombre,$correoelectronico,$telefono,$mensaje)	
		{			
			return $this->query("
				INSERT INTO contactos (Nombre,Telefono,Correoelectronico,Comentario)
						 VALUES ('$nombre','$telefono','$correoelectronico','$mensaje')
	        ");		
		}
	}	
?>