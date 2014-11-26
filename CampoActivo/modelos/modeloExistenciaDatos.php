<?php

include_once "modelodb.php";

// Model_comprobar_existencia_usuario
Class modeloExistencia extends ModeloDB 
{	    	
	public function load()
	{
		
	}

	public function existeUserReg($usuario) //verificar_usuario
	{	
		return $this->query("
			SELECT idUsuario, usuario, email, esAdmin
			FROM usuario
			WHERE ((usuario = '$usuario') OR (email = '$usuario'))
		");	
	}	
	
	public function existeUserLog($usuario,$pass) //verificar_existencia
	{
		return $this->query("
			SELECT idUsuario, usuario, email, esAdmin
	 		FROM usuario
	 		WHERE ((usuario = '$usuario') OR (email = '$usuario')) AND (password = '$pass')
		");	
	}
}

?>