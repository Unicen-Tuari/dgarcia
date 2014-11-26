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
		if (isset($_SESSION['usuario']))
			$this->view->SetUser($_SESSION['usuario']);

		$this->view->render();
	}

	public function actionCarousel($id)
	{
		$img = $this->modeloEventos->load_ImgEvento($id);		
		
		$this->view->set_img($img);
		if (isset($_SESSION['usuario']))
			$this->view->SetUser($_SESSION['usuario']);

		$this->view->renderC();
	}

	public function actionBusqueda()
	{
		$busquedaRealizada = $_POST['inputBuscarE'];
		$eventoResultado = $this->modeloEventos->busqueda($busquedaRealizada);
		
		$this->view->busqueda($eventoResultado);
	}

	public function vistaAgregarE()
	{
		if (isset($_SESSION['usuario']))
			$this->view->SetUser($_SESSION['usuario']);
		
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
		
		$arrEvento = $this->modeloEventos->insertarContenidoEvento($nombre,$texto);
		$id_contenido = $this->modeloEventos->obtenerID_ContenidoEvento();		
		$arrEvento = $this->modeloEventos->insertarImagenesEvento($id_contenido,$ruta);		
		$arrEvento = $this->modeloEventos->insertarEvento($id_contenido,$fecha,$ubicacion);

		$this->actionEvento();
	}

	public function editarEvento()
	{
		$id_evento = $_POST['id_evento'];
		
		$evento = $this->modeloEventos->datos_Evento($id_evento);			
		$this->view->modificarEvento($evento);
	}

	public function actualizarEvento()
	{
		$evento = $_POST['id_evento'];
				
		$fecha = $_POST["fecha"];
		$ubicacion 	= $_POST["ubicacion"];
		$ruta = $_POST["ruta"];
		$nombre = $_POST["nombre"];
		$texto = $_POST["texto"];
		
		$this->modeloEventos->modificarImagenesE($evento,$ruta);
		$this->modeloEventos->modificarE($evento,$fecha,$ubicacion);
		$this->modeloEventos->modificarContenidoE($nombre,$texto,$evento);
		$this->actionEvento();				
	}

	public function eliminarEvento()
	{
		$evento = $_POST['id_evento'];
					
		$this->modeloEventos->eliminarImagenesE($evento);
		$this->modeloEventos->eliminarE($evento);
		$this->modeloEventos->eliminarContenidoE($evento);
		$this->actionEvento();
	}
}

?>