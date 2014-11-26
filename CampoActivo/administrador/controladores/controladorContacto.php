<?php

class ContactoController
{
	private $modeloEventos;
	private	$view;

	public function __construct()
	{
		include "./modelos/modeloContacto.php";
		include "./vistas/vistaContacto.php";

		$this->contacto = new Contacto;
		$this->view = new ContactoView;
	}
	
	public function actionContacto()
	{
		if (isset($_SESSION['usuario']))
			$this->view->SetUser($_SESSION['usuario']);

		$this->view->render();
	}

	public function actionMensaje($nombre,$correoelectronico,$telefono,$mensaje)
	{			
		$arrCont = $this->contacto->nuevoMensaje($nombre,$correoelectronico,$telefono,$mensaje);		 	 
		
		$this->view->set_contacto($arrCont);

		if (isset($_SESSION['usuario']))
			$this->view->SetUser($_SESSION['usuario']);
		
		$this->view->renderContacto();
	}
}

?>