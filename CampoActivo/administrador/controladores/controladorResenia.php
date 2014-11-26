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
		$this->view->render();
	}
}

?>