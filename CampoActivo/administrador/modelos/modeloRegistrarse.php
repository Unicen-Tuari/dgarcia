<?php

include_once "modelodb.php";

class Registrarse extends ModeloDB
{
	public function load()
	{

	}

	public function registrar($registro)
	{
		$usuario		=	$registro["usuario"];
		$nombre			=	$registro["nombre"];
		$apellido		=	$registro["apellido"];
		$dni			=	$registro["dni"];
		$email			=	$registro["email"];
		$celular		=	$registro["Celular"];
		$fecha_nacimiento=	$registro['FechaNacimiento'];
		$telefono_fijo	=	$registro["Telefono_fijo"];
		$password		=	$registro["pass"];
		$direccion		=	$registro["direccion"];
		$fecha_registro	=	date("y/m/d");


		$this->query("INSERT INTO usuario(
					usuario 			,					
					nombre				,
					apellido			,
					dni					,
					fecha_nacimiento	,
					direccion			,
					celular				,
					telefono_fijo		, 
					email				, 
					password			,
					fecha_registro
					)
		VALUES( 
					'$usuario'			,
					'$nombre'			, 
					'$apellido'			,
					'$dni'				,
					'$fecha_nacimiento'	,
			 		'$direccion'		, 
			 		'$celular'			,
			 		'$telefono_fijo'	, 
			 		'$email'			, 
			 		'$password'			,
			 		'$fecha_registro'

			 	  )");
	}		
}

?>