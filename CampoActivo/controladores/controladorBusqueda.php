<?php



class BusquedaController()
{
	private $modeloMaquinas;
	private	$view;
	private $eventos;

	public function __construct()
	{
		include "./vistas/vistaMaquina.php";
		include "./modelos/modeloMaquina.php";
		include "./vistas/vistaEvento.php";
		include "./modelos/modeloEvento.php";

		$this->modeloMaquinas = new Maquina();
		$this->view = new MaquinaView;

		$this->eventos = new Evento();
		$this->view = new EventoView;
	}

	public function actionBusquedaMaq($q)
	{		
		$imgMaqB = $this->modeloMaquinas->load_ResFinales($q);		 	 
		
		$this->$view->set_maquinas($imgMaqB);
		$this->$view->render();
	}

	public function actionCarouselMaq($estado,$id_maq)
	{
		$imgMaq = $this->modeloMaquinas->load_ImgMaq($estado,$id_maq);		 	 
		
		$this->$view->set_imgMaq($imgMaq);
		$this->$view->renderCM();
	}

	public function actionCarousel($id)
	{
		$img = $this->eventos->load_ImgEvento($id);	
					
		$this->view->set_img($img);
		$this->view->renderC();
	}
}

?>