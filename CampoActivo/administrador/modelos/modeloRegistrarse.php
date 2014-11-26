<?php
class Registrarse extends modelodb
   {

	/*******Atributos***********/
	public $sectorReclamo;

		/*****acciones posibles a realizar con un reclamo******/
	public function load(){
		}

	public function registrar($Registro)
		{
			$usuario		=	$Registro["usuario"];
			$nombre			=	$Registro["nombre"];
			$apellido		=	$Registro["apellido"];
			$dni			=	$Registro["dni"];
			$email			=	$Registro["email"];
			$celular		=	$Registro["Celular"];
			$fecha_nacimiento=	$Registro['FechaNacimiento'];
			$telefono_fijo	=	$Registro["Telefono_fijo"];
			$password		=	$Registro["pass"];
			$direccion		=	$Registro["direccion"];
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