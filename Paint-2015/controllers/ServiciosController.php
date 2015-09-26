<?php

class ServiciosController

{
	public function actionServicios(){
		include "./views/ServiciosView.php";
		$view = new ServiciosView;
		$view->render();
	}

	public function actionServiciosAjax(){
		include "./views/ServiciosViewAjax.php";
		$view = new ServiciosViewAjax;
		$view->render();
	}	
}

?>