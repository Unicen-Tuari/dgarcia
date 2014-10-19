<?php

class TurnoController{
	
	public function actionTurno(){
		include "./vistas/vistaTurno.php";
		$view = new TurnoView;
		$view->render();
	}
}

?>