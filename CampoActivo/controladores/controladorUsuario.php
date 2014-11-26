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

	public function errorRegistro()
	{		
		include "./vistas/vistaErrores.php";
		$error = new Errores();

		$error->error_registro();
	}

	public function login()
	{	

		$usuario= $_POST['user']; 
		$pass=$_POST['pass'];
				
		$IdUser = $this->existenciaUser->existeUserLog($usuario,$pass);
		
		if($IdUser == NULL)
		{				
			header("Location:index.php?action=errorLogueo");	
		}
		else
		{
			$_SESSION['IDUsuario'] = $IdUser[0]["idUsuario"];
			$_SESSION['usuario'] = $IdUser[0]["usuario"];
			$_SESSION['esAdmin'] = $IdUser[0]["esAdmin"];
			header("Location:index.php");			
		}
	}

	public function logout()
	{
		session_destroy();
		header("Location:index.php");
	}	

	public function registrarse()
	{
		$arr_registro = array();

		$existeUsuario = $this->existenciaUser->existeUserReg($_POST['usuario_registrarse']);		
		$resultado = count($existeUsuario);

		if($resultado == 0)
		{
			//si no existe el usuario por el campo usuario. Prueba con el email
			$existeUsuario = $this->existenciaUser->existeUserReg($_POST['email_registrarse']);
			$resultado = count($existeUsuario);
		}

		$resultado = count($existeUsuario);

		if($resultado == 0)
		{
						
			$arr_registro['usuario']		= strtolower ($_POST['usuario_registrarse']);	
			$arr_registro['nombre']			= strtolower ($_POST['nombre_registrarse']);
			$arr_registro['apellido']		= strtolower ($_POST['apellido_registrarse']);
			$arr_registro['dni']			= strtolower ($_POST['dni_registrarse']);
			$arr_registro['FechaNacimiento']= strtolower ($_POST['FechaNacimiento']);
			$arr_registro['email']			= strtolower ($_POST['email_registrarse']);
			$arr_registro['Celular']		= strtolower ($_POST['Celular_registrarse']);
			$arr_registro['Telefono_fijo']	= strtolower ($_POST['Telefono_fijo_registrarse']);
			$arr_registro['pass']			= strtolower ($_POST['pass_registrarse']);
			$arr_registro['direccion']		= strtolower ($_POST['Direccion_registrarse']);
			$arr_registro['esAdmin']		= strtolower ('0');
		
			$this->registrarse->registrar($arr_registro);
			$this->view->r_exitoso();
		}
		else
		{ 
			header("Location:index.php?action=errorRegistro");			
		}
	}
}

?>