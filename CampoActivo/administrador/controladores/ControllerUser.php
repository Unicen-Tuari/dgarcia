<?php

error_reporting(E_ALL);
ini_set("display_errors",1);

class ControllerUser
{	
	private $model;
	private $model_registrarse;
	private $model_comprobar_existencia_usuario;	
	
	private $view_home;
	private $view_registrado_exitoso;
	

	public function __construct()
	{
     	/*************Archivos incluidos***********************/

     	include("./vistas/view_registrado_exitoso.php");
     	include("./modelos/Model_comprobar_existencia_de_usuario.php");
	  	include("./modelos/Modelo_registrarse.php");
	  	
        /*************Inicializo las variables con clases***********************/

		$this->model_comprobar_existencia_usuario =	new Model_comprobar_existencia_usuario();
		$this->view_registrado_exitoso = new view_registrado_exitoso();
		$this->model_registrarse = new model_registrarse();
	}
	
	//le estoy pasando el id por referencia
	public function Calendario()//datos home es informacion de una consulta 
	{
		echo ('calendario');
		// echo ($_SESSION['IDUsuario']);
		// $id_usuario=$_SESSION['IDUsuario'];
		// $email=$_SESSION['emailUsuario'];
		// $reclamos_usuario=$this->controller_reclamos->mostrar_reclamos($id_usuario);
		// $r_p=$this->controller_reclamos->reclamos_pendientes($id_usuario);
		// $r_f=$this->controller_reclamos->reclamo_finalizados($id_usuario);
	    // $this->viewCalendario->calendario($id_usuario);

	}

	public function error404()
	{
		//https://es.wikipedia.org/wiki/Error_404
		include_once("./vistas/View_error404.php");
		$error = new error_404();
		$error->pagina_error();
	}

	public function login()
	{
		/*datos del form login*/		
		$usuario = $_POST['user'];	 
		$pass = $_POST['pass'];		
		
		$IdUser = $this->model_comprobar_existencia_usuario->verificar_usuario($usuario,$pass);
		
		if($IdUser == NULL)
		{
		 	include_once("./vistas/View_error_login.php");
		    $error = new View_error_login();
		    $error->error_login();
			echo ('no se logueo');
		}
		else
		{
			$_SESSION['IDUsuario'] = $IdUser[0]["id_persona"];
			$_SESSION['usuario'] = $IdUser[0]["usuario"];			
			$_SESSION['esAdmin'] = $IdUser[0]["esAdmin"];
			// $this->Calendario();				
		}
	}		
				
	public function comprobar_existencia_usuario($email)
	{
		return $this->model_comprobar_existencia_usuario->verificar_usuario($email);
	}

	public function logout()
	{
		session_destroy();
		header("Location:index.php");
		// $this->actionIndex();

		// $this->actionLoginForm();
	}

	public function registrarse()
	{
		$usuario = $_POST['usuario_registrarse'];	 
		$email = $_POST['email_registrarse'];	
		
		$arr_registro = array();

		$existeUsuario = $this->model_comprobar_existencia_usuario->verificar_existencia($usuario,$email);
		
		if($existeUsuario == NULL)
		{			
			$pass = $_POST['pass_registrarse'];
			$arr_registro['usuario'] = strtolower ($_POST['usuario_registrarse']);	
			$arr_registro['nombre']	= strtolower ($_POST['nombre_registrarse']);
			$arr_registro['apellido'] = strtolower ($_POST['apellido_registrarse']);
			$arr_registro['dni'] = strtolower ($_POST['dni_registrarse']);
			$arr_registro['FechaNacimiento'] = strtolower ($_POST['FechaNacimiento']);
			$arr_registro['email'] = strtolower ($_POST['email_registrarse']);
			$arr_registro['Celular'] = strtolower ($_POST['Celular_registrarse']);
			$arr_registro['Telefono_fijo'] = strtolower ($_POST['Telefono_fijo_registrarse']);
			$arr_registro['pass'] = strtolower ($pass);
			$arr_registro['direccion'] = strtolower ($_POST['Direccion_registrarse']);
		
			$this->model_registrarse->registrar($arr_registro);
			$this->view_registrado_exitoso->r_exitoso();
		}
		else
		{ 
			include_once("./vistas/View_error_login.php");
			$error = new View_error_login();

			$mail_existente = "El email o el usuario ya fueron usados para otra cuenta, ingrese otro o presione el  boton ingresar";
			$error->error_login($mail_existente);
		}
	}
}

?>