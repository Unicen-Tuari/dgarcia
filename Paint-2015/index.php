<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

	if(! array_key_exists('action', $_REQUEST)||$_REQUEST['action']=='index')
	{
		include "./controllers/IndexController.php";
		$controller = new IndexController();
		$controller->actionIndex();		
	}
	/*
	else if($_REQUEST['action']=='trabajos')
	{
		include "./controllers/TrabajosController.php";
		$c = new TrabajosController();
		$c->actionTrabajos();
	}
	else if($_REQUEST['action']=='servicios')
	{
		include "./controllers/ServiciosController.php";
		$c = new ServiciosController();
		$c->actionServicios();
	}
	else if($_REQUEST['action']=='tarifas')
	{
		include "./controllers/TarifasController.php";
		$c = new TarifasController();
		$c->actionTarifas();
	}
	else if($_REQUEST['action']=='contacto')
	{
		include "./controllers/ContactoController.php";
		$c = new ContactoController();
		$c->actionContacto();
	}
	*/
	else if($_REQUEST['action']=='inicio_ajax')
	{
		include "./controllers/IndexController.php";
		$c = new IndexController();
		$c->actionIndexAjax();
	}
	else if($_REQUEST['action']=='servicios_ajax')
	{
		include "./controllers/ServiciosController.php";
		$c = new ServiciosController();
		$c->actionServiciosAjax();
	}
	else if($_REQUEST['action']=='contacto_ajax')
	{
		include "./controllers/ContactoController.php";
		$c = new ContactoController();
		$c->actionContactoAjax();
	}
	/*else 
	{
		echo "ERROR ACCION NO VALIDA";
	}*/
		 


?>