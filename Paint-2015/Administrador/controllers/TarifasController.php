<?php

class TarifasController{
	
	public function actionTarifas(){
		include "./views/TarifasView.php";
		$view = new TarifasView;
		$view->render();
	}

	public function actionTarifasAjax(){
		include "./views/TarifasViewAjax.php";
		$view = new TarifasViewAjax;
		$view->render();
	}	
	
}

?>