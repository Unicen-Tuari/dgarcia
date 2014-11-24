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

	public function actionCarouselMaq($estado,$id_maq)
	{
		$imgMaq = $this->modeloMaquinas->load_ImgMaq($estado,$id_maq);		 	 
		
		$this->view->set_imgMaq($imgMaq);
		$this->view->renderCM();
	}

	public function vistaAgregarMaq()
	{
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

	public function actionBusquedaMaq($q)
	{
		$imgMaqB = $this->modeloMaquinas->load_ResFinales($q);		 	 
		
		$this->view->set_maquinas($imgMaqB);
		$this->view->render();
	}	

	public function editarMaq()
	{
		$maquina = $_POST['id_maq'];
		$m = explode("&", $maquina);
		
		$maqmod = $this->modeloMaquinas->datos_Maq($m[1],$m[0]);			
		$this->view->modificarMaquina($maqmod);
	}

	public function actualizarMaq()
	{
		$maquina = $_POST['id_maq'];
		$m = explode("&", $maquina);

		$nombre = $_POST["nombre"];
		$tipo 	= $_POST["tipo"];
		$modelo = $_POST["modelo"];
		$estado = $_POST["estado"];
		$ruta 	= $_POST["ruta"];
		$precio = $_POST["precio"];
		$texto 	= $_POST["texto"];	
		
		$this->modeloMaquinas->modificarImagenesMaq($m[0],$ruta);
		$this->modeloMaquinas->modificarMaq($m[0],$m[1],$modelo,$tipo,$precio);// $this->actualizarMaq($m[0]);
		$this->modeloMaquinas->modificarContenidoMaq($nombre,$texto,$m[0]);
		$this->actionMaquina($m[1]);				
	}

	public function eliminarMaquina()
	{
		$maquina = $_POST['id_maq'];
		$m = explode("&", $maquina);
			
		$this->modeloMaquinas->eliminarMaq($m[0]);
		$this->modeloMaquinas->eliminarImagenesMaq($m[0]);
		$this->modeloMaquinas->eliminarContenidoMaq($m[0]);
		$this->actionMaquina($m[1]);
	}	
}

?>