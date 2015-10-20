<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);
	
	include "./controllers/AdminController.php";
			
	if(! array_key_exists('action', $_REQUEST))
	{
		
		$controller = new AdminController();
		$controller->mostrarHome();		
	}	

	if(array_key_exists('action', $_REQUEST) && $_REQUEST['action']=='agregar_novedad')
	{
		
		$controller = new AdminController();
		$controller->agregarNovedad();		
	}	
	
	if(array_key_exists('action', $_REQUEST) && $_REQUEST['action']=='agregar_imagenes')
	{
		$controller = new AdminController();
		$controller->agregarImagenes();		
	}

	if(array_key_exists('action', $_REQUEST) && $_REQUEST['action']=='noticias_partial')
	{
		$controller = new AdminController();
		$controller->mostrarHomeParcial();		
	}

	if(array_key_exists('action', $_REQUEST) && $_REQUEST['action']=='borrar_novedad')
	{
		$controller = new AdminController();
		$controller->borrarNovedad();		
	}

	if(array_key_exists('action', $_REQUEST) && $_REQUEST['action']=='agregar_imagenes')
	{
		$controller = new AdminController();
		$controller->agregarImagenes();		
	}
		
	/*else 
	{
		echo "ERROR ACCION NO VALIDA";
	}*/
		 


?>