<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

	if(! array_key_exists('action', $_REQUEST)||$_REQUEST['action']=='index')
	{
		include "./controllers/IndexController.php";
		$controller = new IndexController();
		$controller->actionIndex();		
	}	
	else if($_REQUEST['action']=='inicio_ajax')
	{
		include "./controllers/IndexController.php";
		$c = new IndexController();
		$c->actionIndexAjax();
	}
	else if($_REQUEST['action']=='trabajos_ajax')
	{
		include "./controllers/TrabajosController.php";
		$c = new TrabajosController();
		$c->actionTrabajosAjax();
	}
	else if($_REQUEST['action']=='servicios_ajax')
	{
		include "./controllers/ServiciosController.php";
		$c = new ServiciosController();
		$c->actionServiciosAjax();
	}
	else if($_REQUEST['action']=='tarifas_ajax')
	{
		include "./controllers/TarifasController.php";
		$c = new TarifasController();
		$c->actionTarifasAjax();
	}

	else if($_REQUEST['action']=='novedades_ajax')
	{		
		if(array_key_exists('categoria', $_GET))
		{
			include "./controllers/NovedadesController.php";
			$c = new NovedadesController();
			$c->actionNovedadesAjax($_GET['categoria']);										
		}
	}	
	else if($_REQUEST['action']=='galeria_ajax')
	{
		if(array_key_exists('categoria', $_GET))
		{
			include "./controllers/GaleriaController.php";
			$c = new GaleriaController();
			$c->actionGaleriaAjax($_GET['categoria']);
		}
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