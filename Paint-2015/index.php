<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

	if(! array_key_exists('action', $_REQUEST)||$_REQUEST['action']=='index')
	{
		include "./controllers/IndexController.php";
		$controller = new IndexController();
		$controller->actionIndex();		
	}
	else if($_REQUEST['action']=='trabajos')
	{
		include "./controllers/TrabajosController.php";
		$c = new TrabajosController();
		$c->actionTrabajos();
	}
	/*else if($_REQUEST['action']=='editarPersonas')
	{
		if(array_key_exists('id', $_GET)){
			include "./controllers/PersonaController.php";
			$c = new PersonaController();
			$c->actionEditar($_GET['id']);
		}
		else {
			echo "Error de Parametros";
		}
	}
	else 
	{
		echo "ERROR ACCION NO VALIDA";
	}*/
		 


?>