<?php

class EventoController
{	
	private $modeloEventos;
	private	$view;

	public function __construct()
	{
		include "./vistas/vistaEvento.php";
		include "./modelos/modeloEvento.php";

		$this->modeloEventos = new Evento();
		$this->view = new EventoView;
	}
	
	public function actionEvento()
	{		
		$e = $this->modeloEventos->load();		
		
		$this->view->set_eventos($e);		
		$this->view->render();
	}

	public function actionCarousel($id)
	{
		$img = $this->modeloEventos->load_ImgEvento($id);		
		
		$this->view->set_img($img);
		$this->view->renderC();
	}

	public function actionBusqueda()
	{
		$busquedaRealizada = $_POST['inputBuscarE'];
		$eventoResultado = $this->modeloEventos->busqueda($busquedaRealizada);
		
		$this->view->busqueda($eventoResultado);
	}
}

?>