<?php

include "./vistas/vistaMaquina.php";
include "./modelos/modeloMaquina.php";
include "./vistas/vistaEvento.php";
include "./modelos/modeloEvento.php";

class BusquedaController(){

	public function actionBusquedaMaq($q){

		$maquinasB = new Maquina();
		$view = new MaquinaView;
		
		$imgMaqB = $maquinasB->load_ResFinales($q);		 	 
		
		$view->set_maquinas($imgMaqB);

		$view->render();

	}

	public function actionCarouselMaq($estado,$id_maq){

			$maquinasI = new Maquina();
			$view = new MaquinaView;
			
			$imgMaq = $maquinasI->load_ImgMaq($estado,$id_maq);		 	 
			
			$view->set_imgMaq($imgMaq);

			$view->renderCM();

		}

	public function actionCarousel($id){

			$eventos = new Evento();
			$view = new EventoView;
			
			$img = $eventos->load_ImgEvento($id);		
			
			$view->set_img($img);

			$view->renderC();

		}

}

?>