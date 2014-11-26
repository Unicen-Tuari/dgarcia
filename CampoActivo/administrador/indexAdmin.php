<?php

/**
 * Script principal de la aplicacion. Todos los requerimientos de los usuarios son tratados por este script. 
 * Este script rutea al controlador apropiado según la variable de action. 
 * 
 * 
 * @param String $action permite establecer el controlador y acción a ejecutar.
 * @todo Podemos cambiar los IF anidados por switchs
 *  
 */
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
	/**
	 * Manejo de Seguridad
	 */
	// if(array_key_exists('action', $_REQUEST)&&$_REQUEST['action']=='login')
	// {	
	// 	include "./controllers/IndexController.php";
	// 	$controller = new IndexController();
	// 	$controller->actionLogin();		
	// }
	// else if(!isset($_SESSION['user'])){
	// 	include "./controllers/IndexController.php";
	// 	$controller = new IndexController();
	// 	$controller->actionLoginForm();		
	// } 		
	// else if(! array_key_exists('action', $_REQUEST)||$_REQUEST['action']=='logout')
	// {
	// 	include "./controllers/IndexController.php";
	// 	$controller = new IndexController();
	// 	$controller->actionLogout();		
	// }	
	/**
	 * Acciones
	 */
	// if(!isset($_SESSION['IDUsuario']))
	// echo('DESLOGUEADO ');

	// if(isset($_SESSION['IDUsuario']))
	// 	echo('Logueado: '.$_SESSION['usuario']);

	if(isset($_POST['inputBuscarE'])){
			include "./controladores/controladorEvento.php";
			$c = new EventoController();
			$c->actionBusqueda();

	}else if(isset($_POST['inputBuscarM'])){
		include "./controladores/controladorMaquina.php";
		$c = new MaquinaController();
		$c->actionBusqueda();
	
	}else if((array_key_exists('action', $_REQUEST))&&($_REQUEST['action']=='login')){	
		include "./controladores/controladorUsuario.php";
		$log= new UsuarioController();
		$log->login();	
		
	}else if((array_key_exists('action', $_REQUEST))&&($_REQUEST['action']=='logout')){
		include "./controladores/controladorUsuario.php";
		$controller = new UsuarioController();
		$controller->logout();

	}else if(! array_key_exists('action', $_REQUEST)||$_REQUEST['action']=='index'){
		include "./controladores/controladorInicio.php";
		$controller = new IndexController();
		$controller->actionIndex();	

	}else if($_REQUEST['action']=='maquina'){				
		if(array_key_exists('estado', $_GET))
		{
			include "./controladores/controladorMaquina.php";
			$c = new MaquinaController();
			$c->actionMaquina($_GET['estado']);									
		}

	}else if($_REQUEST['action']=='verCrearMaq'){
		include "./controladores/controladorMaquina.php";
		$c = new MaquinaController();
		$c->vistaAgregarMaq();

	}else if($_REQUEST['action']=='insertarMaq'){
		include "./controladores/controladorMaquina.php";
		$c = new MaquinaController();
		$c->insertarMaquina();

	}else if($_REQUEST['action']=='modificarMaq'){
		include "./controladores/controladorMaquina.php";
		$c = new MaquinaController();
		$c->editarMaq();

	}else if($_REQUEST['action']=='actualizarMaq'){
		include "./controladores/controladorMaquina.php";
		$c = new MaquinaController();
		$c->actualizarMaq();

	}else if($_REQUEST['action']=='eliminarMaq'){
		include "./controladores/controladorMaquina.php";
		$c = new MaquinaController();
		$c->eliminarMaquina();

	}else if($_REQUEST['action']=='carouselMaq'){	
		
		if(array_key_exists('id', $_GET))
		{
			include "./controladores/controladorMaquina.php";
			$c = new MaquinaController();
			$c->actionCarouselMaq($_GET['id']);
		}

	}else if($_REQUEST['action']=='evento'){
		include "./controladores/controladorEvento.php";
		$c = new EventoController();
		$c->actionEvento();

	}else if($_REQUEST['action']=='verCrearEvento'){
		include "./controladores/controladorEvento.php";
		$c = new EventoController();
		$c->vistaAgregarE();

	}else if($_REQUEST['action']=='insertarEvento'){
		include "./controladores/controladorEvento.php";
		$c = new EventoController();
		$c->insertarEvento();

	}else if($_REQUEST['action']=='modificarEvento'){
		include "./controladores/controladorEvento.php";
		$c = new EventoController();
		$c->editarEvento();

	}else if($_REQUEST['action']=='actualizarEvento'){
		include "./controladores/controladorEvento.php";
		$c = new EventoController();
		$c->actualizarEvento();

	}else if($_REQUEST['action']=='eliminarEvento'){
		include "./controladores/controladorEvento.php";
		$c = new EventoController();
		$c->eliminarEvento();

	}else if($_REQUEST['action']=='carouselE'){
		if(array_key_exists('id', $_GET))
		{
			include "./controladores/controladorEvento.php";
			$c = new EventoController();
			$c->actionCarousel($_GET['id']);									
		}

	}else if($_REQUEST['action']=='turno'){
		include "./controladores/controladorTurno.php";
		$c = new TurnoController();
		$c->actionTurno();

	}else if($_REQUEST['action']=='contacto'){
																									
		if((array_key_exists('name', $_POST)) && (array_key_exists('email', $_POST)) 
			&& (array_key_exists('phone', $_POST)) && (array_key_exists('message', $_POST)))
		{
			include "./controladores/controladorContacto.php";
			$c = new ContactoController();
			$c->actionMensaje($_POST['name'],$_POST['email'],$_POST['phone'],$_POST['message']);									
		}else
		{
			include "./controladores/controladorContacto.php";
			$c = new ContactoController();
			$c->actionContacto();
		}

	}else if($_REQUEST['action']=='resultado'){
		if(array_key_exists('q', $_GET))
		{
			include "./controladores/controladorMaquina.php";
			$c = new MaquinaController();
			$c->actionBusquedaMaq($_GET['q']);
		}
		else 
		{
			echo "Error de Parametros";
		}
	}else if($_REQUEST['action']=='errorLogueo'){
		include "./controladores/controladorUsuario.php";
		$c = new UsuarioController();
		$c->errorLogueo();
		
	}else 
	{
		echo "ERROR ACCION NO VALIDA";
	}
?>