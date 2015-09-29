<?php

class TrabajosController{
	
	public function actionTrabajos(){
		include "./views/TrabajosView.php";
		$view = new TrabajosView;
		$view->render();
	}
	
	public function actionTrabajosAjax(){
		include "./views/TrabajosViewAjax.php";
		$view = new TrabajosViewAjax;
		$view->render();
	}	
}

?>