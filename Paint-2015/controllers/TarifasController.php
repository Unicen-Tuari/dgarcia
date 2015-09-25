<?php

class TarifasController{
	
	public function actionTarifas(){
		include "./views/TarifasView.php";
		$view = new TarifasView;
		$view->render();
	}
	
}

?>