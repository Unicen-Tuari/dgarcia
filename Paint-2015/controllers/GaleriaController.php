<?php

class GaleriaController{
	
	public function actionGaleria(){
		include "./views/GaleriaView.php";
		$view = new GaleriaView;
		$view->render();
	}

	public function actionGaleriaAjax($categoria){
		include "./views/GaleriaViewAjax.php";
		include "./models/GaleriaModelo.php";
		$this->GaleriaModelo = new Galeria();
		$this->view = new GaleriaViewAjax;

		$cat = $this->GaleriaModelo->load_Categoria($categoria);
		$imagen = $this->GaleriaModelo->load_Imagen($categoria);
		$this->view->set_Imagenes($imagen,$cat);
		$this->view->render();
	}	
}

?>