<?php

class MaquinaController{
	
	public function actionMaquina(){
		include "./vistas/vistaMaquina.php";
		$view = new MaquinaView;
		$view->render();
	}
}

?>