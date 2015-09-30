<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

	
	include "./controllers/AdminController.php";
	$controller = new AdminController();
	$controller->actionIndex();		

	if(! array_key_exists('action', $_REQUEST)||$_REQUEST['action']=='agregarNovedad')
	{
		//print_r($_REQUEST);
		$controller = new AdminController();
		$controller->actionAgregarNovedad();		
	}	
	/*else 
	{
		echo "ERROR ACCION NO VALIDA";
	}*/
		 


?>