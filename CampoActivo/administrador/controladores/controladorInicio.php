<?php

class IndexController
{
	private	$view;

	public function __construct()
	{
		include "./vistas/vistaInicio.php";		
		$this->view = new IndexView;
	}

	public function actionIndex()
	{
		if (isset($_SESSION['usuario']))
			$this->view->SetUser($_SESSION['usuario']);
		
		$this->view->render();
	}
		
	// public function actionLoginForm(){
	// 	include "./views/LoginFormView.php";
	// 	$view = new LoginFormView;
	// 	$view->render();
	// }
	
	// public function actionLogin(){
	// 	// Aqui hay que reemplazar por un modelo 
	// 	$user = 'admin';
	// 	$pass = 'admin';
	
	// 	// Acceso
	// 	if(($_POST['user']==$user)&&($_POST['pass']==$pass)){
	// 		$_SESSION['user'] = 'admin';
	// 		$this->actionIndex();
	// 	}
	// 	else{
	// 		$this->actionLoginForm();
	// 	}	
		
	// }

	// public function actionLogout(){
	// 	session_destroy();
	// 	$this->actionLoginForm();
	// }	
}

?>