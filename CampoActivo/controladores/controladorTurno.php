<?php

class TurnoController
{
	private	$view;

	public function __construct()
	{
		include "./vistas/vistaTurno.php";

		$this->view = new TurnoView;
	}

	public function actionTurno()
	{
		if (isset($_SESSION['usuario']))
			$this->view->SetUser($_SESSION['usuario']);
		
		$this->view->render();
	}
}

?>