<?php

class NovedadesController{

	private $NovedadesModelo;
	private	$view;
	
	/*public function actionNovedades(){
		include "./views/NovedadesView.php";
		$view = new NovedadesView;
		$view->render();
	}	*/
		
	public function actionNovedadesAjax($categoria){
		include "./views/NovedadesViewAjax.php";
		include "./models/NovedadesModelo.php";
		$this->NovedadesModelo = new Novedades();
		$this->view = new NovedadesViewAjax;

		$cat = $this->NovedadesModelo->load_Categoria($categoria);
		$contenido = $this->NovedadesModelo->load_Novedades($categoria);
		$this->view->set_novedades($contenido,$cat);
		$this->view->render();
	}	

	public function actionNovedadAjax($id_noticia){
		include "./views/NovedadesViewAjax.php";
		include "./models/NovedadesModelo.php";
		$this->NovedadesModelo = new Novedades();
		$this->view = new NovedadesViewAjax;

		$contenido = $this->NovedadesModelo->load_Novedad($id_noticia);
		$this->view->set_novedad($contenido);
		$this->view->render_novedad();
	}
}

?>