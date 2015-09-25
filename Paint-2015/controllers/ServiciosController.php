<?php

class ServiciosController
{
	public function actionServicios(){
		include "./views/ServiciosView.php";
		$view = new ServiciosView;
		$view->render();
	}	
}

?>