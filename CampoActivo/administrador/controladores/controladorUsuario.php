<?php

error_reporting(E_ALL);
ini_set("display_errors",1);

class UsuarioController
{	
	private $view;
	private $registrarse;
	private $existenciaUser;
	
	public function __construct()
	{
     	include "./vistas/vistaRegistroExitoso.php";				
		include "./modelos/modeloExistenciaDatos.php";
	  	include "./modelos/modeloRegistrarse.php";
        
		$this->existenciaUser = new modeloExistencia();
		$this->registrarse	= new Registrarse();
		$this->view	= new vistaRegExitoso();		
	}

	public function Calendario()
		{
			echo ('calendario');			
		}
	
	public function errorLogueo()
	{
		include "./vistas/vistaErrores.php";
		$error = new Errores();

		$error->error_login();
	}

	public function login()
	{
		$usuario= $_POST['user']; 
		$pass=$_POST['pass'];
				
		$IdUser = $this->existenciaUser->existeUserLog($usuario,$pass);
		
		if($IdUser == NULL)
		{			
			header("Location:indexAdmin.php?action=errorLogueo");	
		}
		else
		{
			$_SESSION['IDUsuario'] = $IdUser[0]["idUsuario"];
			$_SESSION['usuario'] = $IdUser[0]["usuario"];
			$_SESSION['esAdmin'] = $IdUser[0]["esAdmin"];			
			header("Location:indexAdmin.php");			
		}
	}

	public function logout()
	{
		session_destroy();
		header("Location:indexAdmin.php");
	}
}

?>