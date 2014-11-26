<?php

error_reporting(E_ALL);
ini_set("display_errors",1);

class UsuarioController
{		
	private $model_registrarse;
	private $Registrarse;	
	private $view_registrado_exitoso;	
	
	public function __construct()
	{
     	include_once("./vista/view_registrado_exitoso.php");		
	  	include_once("./modelo/modeloExistencia.php");
	  	include_once("./modelo/Modelo_registrarse.php");

        $this->existeUsuario = new modeloExistencia();		
		$this->view_registrado_exitoso = new view_registrado_exitoso();
		$this->model_registrarse = new Registrarse();
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
		include_once("./vista/View_error404.php");
		$error= new error_404();
		$error->pagina_error();
	}

	public function login()
	{
		$email= $_POST['user'];	 
		$pass=$_POST['pass'];
		
		$IdUser = $this->existeUsuario->existeUserLog($email,$pass);
		
		if($IdUser == NULL)
		{
			echo ('no se logueo');
		}
		else
		{
			$_SESSION['IDUsuario'] = $IdUser[0]["idUsuario"];
			$_SESSION['usuario'] = $IdUser[0]["usuario"];
			$_SESSION['esAdmin'] = $IdUser[0]["esAdmin"];						
		}
	}

	public function registrarse()
	{
		$arr_registro = array();

		$existeUsuario = $this->$this->existeUsuario->existeUserReg($_POST['usuario_registrarse']);		
		$resultado = count($existeUsuario);

		if($resultado == 0)
		{//si no existe el usuario por el campo usuario. Prueba con el email
			$existeUsuario = $this->model_comprobar_existencia_usuario->verificar_usuario(
									$_POST['email_registrarse']);
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
		
			$this->model_registrarse->registrar($arr_registro);
			$this->view_registrado_exitoso->r_exitoso();
		}
		else
		{ 
			include_once("./vista/View_error_login.php");
			$error=new View_error_login();
			$mail_existente="<h2El email ya fue usado para otra cuenta, ingrese otro o presione el  boton ingresar";
			$error->error_login($mail_existente);
		}
	}
}

?>