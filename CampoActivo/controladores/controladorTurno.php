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
		$this->view->render();
	}
}

?>