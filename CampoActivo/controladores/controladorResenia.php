<?php

class ReseniaController
{
	private	$view;

	public function __construct()
	{
		include "./vistas/vistaResenia.php";

		$this->view = new ReseniaView;
	}

	public function actionResenia()
	{
		if (isset($_SESSION['usuario']))
			$this->view->SetUser($_SESSION['usuario']);
		
		$this->view->render();
	}
}

?>