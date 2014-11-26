<?php

include_once( "modelo.php");

Class modeloExistencia extends ModeloDB
{

	/*******Atributos***********/

	/*******Métodos***********************************/		    	
	public function load()
	{
		
	}

	public function existeUserReg($usuario)
	{	
		return $this->query("
			SELECT idUsuario, usuario, email, esAdmin
			FROM usuario
			WHERE ((usuario = '$usuario') OR (email = '$usuario'))
		");	
	}	
	
	public function existeUserLog($usuario,$email)
	{
		return $this->query("
			SELECT idUsuario, usuario, email, esAdmin
	 		FROM usuario
	 		WHERE ((usuario = '$usuario') OR (email = '$usuario')) AND (password = '$pass')
		");	
	}
}

?>