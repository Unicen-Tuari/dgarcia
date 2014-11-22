<?php	

class EventoController{	

	private $modeloEventos;
	private	$view;

	public function __construct()
	{
		include "./vistas/vistaEvento.php";
		include "./modelos/modeloEvento.php";

		$this->modeloEventos = new Evento();
		$this->view = new EventoView;
	}
	
	public function actionEvento(){
		
		$e = $this->modeloEventos->load();		
		
		$this->view->set_eventos($e);
		
		$this->view->render();
	}

	public function actionCarousel($id){

		$img = $this->modeloEventos->load_ImgEvento($id);		
		
		$this->view->set_img($img);

		$this->view->renderC();

	}

	public function vistaAgregarE(){

		$this->view->nuevoEvento();
	}

	public function insertarEvento()
	{
		//request toma post y get...

		$nombre = $_REQUEST['nombre'];
		$texto = $_REQUEST['texto'];		
		$ruta = $_REQUEST['ruta'];
		$fecha = $_REQUEST['fecha'];
		$ubicacion = $_REQUEST['ubicacion'];
		// print_r($ruta);
		// die();
		$arrEvento = $this->modeloEventos->insertarContenidoEvento($nombre,$texto);
		$id_contenido = $this->modeloEventos->obtenerID_ContenidoEvento();		
		$arrEvento = $this->modeloEventos->insertarImagenesEvento($id_contenido,$ruta);		
		$arrEvento = $this->modeloEventos->insertarEvento($id_contenido,$fecha,$ubicacion);

		$this->actionEvento();
	}
}


?>