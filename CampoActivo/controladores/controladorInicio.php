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
}

?>