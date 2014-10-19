<?php

include "./vistas/vistaMaquina.php";
include "./modelos/modeloMaquina.php";

class MaquinaController{
	
	public function actionMaquina($estado){
		
		$maquinas = new Maquina();
		$view = new MaquinaView;

		$m = $maquinas->load_Maq($estado);	
			
		$view->set_maquinas($m);
		
		$view->render();
		
	}

	public function actionCarouselMaq($estado,$id_maq){

		$maquinasI = new Maquina();
		$view = new MaquinaView;
		
		$imgMaq = $maquinasI->load_ImgMaq($estado,$id_maq);		 	 
		
		$view->set_imgMaq($imgMaq);

		$view->renderCM();

	}

	public function actionBusquedaMaq($q){

		$maquinasB = new Maquina();
		$view = new MaquinaView;
		
		$imgMaqB = $maquinasB->load_ResFinales($q);		 	 
		
		$view->set_maquinas($imgMaqB);

		$view->render();

	}

}

?>