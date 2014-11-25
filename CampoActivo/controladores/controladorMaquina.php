<?php

class MaquinaController
{

	private $modeloMaquinas;
	private	$view;

	public function __construct()
	{
		include "./vistas/vistaMaquina.php";
		include "./modelos/modeloMaquina.php";

		$this->modeloMaquinas = new Maquina();
		$this->view = new MaquinaView;
	}
	
	public function actionMaquina($estado)
	{
		$m = $this->modeloMaquinas->load_Maq($estado);	
			
		$this->view->set_maquinas($m);		
		$this->view->render();		
	}

	public function actionCarouselMaq($id_maq)
	{
		$imgMaq = $this->modeloMaquinas->load_ImgMaq($id_maq);
		
		$this->view->set_imgMaq($imgMaq);
		$this->view->renderCM();
	}

	// public function actionBusquedaMaq($q){

	// 	$maquinasB = new Maquina();
	// 	$view = new MaquinaView;
		
	// 	$imgMaqB = $maquinasB->load_ResFinales($q);		 	 
		
	// 	$view->set_maquinas($imgMaqB);

	// 	$view->render();

	// }

	public function actionBusqueda()
	{      
		$busquedaRealizada = $_POST['inputBuscarM'];
		
		$ResultMaq = $this->modeloMaquinas->busqueda($busquedaRealizada);

		$this->view->busqueda($ResultMaq);
	}
}

?>