<?php

class GaleriaController{
	
	public function actionGaleria(){
		include "./views/GaleriaView.php";
		$view = new GaleriaView;
		$view->render();
	}

	public function actionGaleriaAjax(){
		include "./views/GaleriaViewAjax.php";
		$view = new GaleriaViewAjax;
		$view->render();
	}	
}

?>