<?php

class ReseniaController{
	
	public function actionResenia(){
		include "./vistas/vistaResenia.php";
		$view = new ReseniaView;
		$view->render();
	}
}

?>