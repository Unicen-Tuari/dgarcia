<?php

class TrabajosController{
	
	public function actionTrabajos(){
		include "./views/TrabajosView.php";
		$view = new TrabajosView;
		$view->render();
	}
	
}

?>