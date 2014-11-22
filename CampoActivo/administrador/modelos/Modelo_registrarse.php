<?php

class model_registrarse extends modelodb
{
	public $sectorReclamo;

		/*****acciones posibles a realizar con un reclamo******/
	public function load()
	{
		
	}

	public function registrar($Registro)
	{
		$usuario = $Registro["usuario"];
		$nombre	= $Registro["nombre"];
		$apellido =	$Registro["apellido"];
		$dni = $Registro["dni"];
		$email = $Registro["email"];
		$Celular = $Registro["Celular"];
		$fecha_nacimiento =	date("y/m/d");
		$Telefono_fijo = $Registro["Telefono_fijo"];
		$pass =	$Registro["pass"];
		$direccion = $Registro["direccion"];
		$fecha_registro	= date("y/m/d");

		// El id_persona debe incrementarse solo
		$sql = "INSERT INTO USUARIO(
				usuario 			,					
				nombre				,
				apellido			,
				dni_persona			,
				fecha_nacimiento	,
				direccion			,
				celular				,
				telefono_fijo		, 
				email				, 
				password			,
				fecha_registro
				)
		VALUES( 
				:usuario 			,
				:nombre				, 
				:apellido			,				
				:dni_persona		,
				:fecha_nacimiento	,
		 		:direccion			, 
		 		:celular			,
		 		:telefono_fijo		, 
		 		:email				, 
		 		:password			,
		 		:fecha_registro
		 	  )";


		$q = $this->connection(); 
		$preparado = $q->prepare($sql);

		$preparado->execute(
							array
								(		
									':usuario' => $usuario				,											
									':nombre' => $nombre				, 
									':apellido' => $apellido				,				
									':dni_persona' => $dni					,
									':fecha_nacimiento' => $fecha_nacimiento		,
							 		':direccion' => $direccion			, 
							 		':celular' => $Celular				,
							 		':telefono_fijo' => $Telefono_fijo		, 
							 		':email' => $email				, 
							 		':password'	=> $pass					,
							 		':fecha_registro' => $fecha_registro
				 				 )
							);
	}
}

?>