<?php

class MaquinaController{
	
	private $modeloMaquinas;
	private	$view;

	public function __construct()
	{
		include "./vistas/vistaMaquina.php";
		include "./modelos/modeloMaquina.php";

		$this->modeloMaquinas = new Maquina();
		$this->view = new MaquinaView;
	}

	public function actionMaquina($estado){
		
		$this->modeloMaquinas = new Maquina();
		$this->view = new MaquinaView;

		$m = $this->modeloMaquinas->load_Maq($estado);	
			
		$this->view->set_maquinas($m);
		
		$this->view->render();
		
	}

	public function actionCarouselMaq($estado,$id_maq){

		$this->modeloMaquinas = new Maquina();
		$this->view = new MaquinaView;
		
		$imgMaq = $this->modeloMaquinas->load_ImgMaq($estado,$id_maq);		 	 
		
		$this->view->set_imgMaq($imgMaq);

		$this->view->renderCM();

	}

	public function vistaAgregarMaq(){

		$this->view->nuevaMaquina();
	}

	public function insertarMaquina()
	{
		//request toma post y get...

		$nombre = $_REQUEST["nombre"];
		$tipo 	= $_REQUEST["tipo"];
		$modelo = $_REQUEST["modelo"];
		$estado = $_REQUEST["estado"];
		$ruta 	= $_REQUEST["ruta"];
		$precio = $_REQUEST["precio"];
		$texto 	= $_REQUEST["texto"];		

		$arrMaq = $this->modeloMaquinas->insertarContenidoMaq($nombre,$texto);
		$id_contenido = $this->modeloMaquinas->obtenerID_ContenidoMaq();		
		$arrMaq = $this->modeloMaquinas->insertarImagenesMaq($id_contenido,$ruta);		
		$arrMaq = $this->modeloMaquinas->insertarMaq($id_contenido,$estado,$modelo,$tipo,$precio);

		$this->actionMaquina($estado);
		$this->actionCarouselMaq($estado,$id_maq);		
	}

	public function actionBusquedaMaq($q){

		$this->modeloMaquinas = new Maquina();
		$this->view = new MaquinaView;
		
		$imgMaqB = $this->modeloMaquinas->load_ResFinales($q);		 	 
		
		$this->view->set_maquinas($imgMaqB);

		$this->view->render();
	}	

}

?>