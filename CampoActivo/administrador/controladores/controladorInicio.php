<?php

class IndexController{
	
	public function actionIndex(){
		include "./vistas/vistaInicio.php";
		$view = new IndexView;
		$view->render();
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