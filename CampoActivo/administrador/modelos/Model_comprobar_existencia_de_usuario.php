<?php

include_once( "modelodb.php");

Class Model_comprobar_existencia_usuario extends ModeloDB
{		    	
	public function load()
	{
	
	}

	public function verificar_usuario($usuario,$pass)
	{	
		return $this->query("
			SELECT id_persona, usuario, email, password, esAdmin
			FROM usuario
			WHERE ((usuario = '$usuario') OR (email = '$usuario')) AND (password = '$pass') AND (esAdmin = '1')
		");	
	}

	public function verificar_existencia($usuario,$email)
	{
		return $this->query("
			SELECT id_persona, usuario, email
			FROM usuario
			WHERE ((usuario = '$usuario') OR (email = '$usuario')) OR (email = '$email')
		");	
	}
}

?>