<?php

	include "./vistas/vistaEvento.php";
	include "./modelos/modeloEvento.php";

class EventoController{	
	
	public function actionEvento(){
		
		$eventos = new Evento();
		$view = new EventoView;

		$e = $eventos->load();		
		
		$view->set_eventos($e);
		
		$view->render();
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