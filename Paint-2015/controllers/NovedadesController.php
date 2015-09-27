<?php

class NovedadesController{
	
	public function actionNovedades(){
		include "./views/NovedadesView.php";
		$view = new NovedadesView;
		$view->render();
	}

	public function actionNovedadesAjax($categoria){
		include "./views/NovedadesViewAjax.php";
		$view = new NovedadesViewAjax;
		$cat = $this->NovedadesModelo->load_Nov($categoria);
		$this->view->set_novedades($cat);
		$this->$view->render();
	}	
}

?>