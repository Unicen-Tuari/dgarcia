<?php
include "./models/NovedadesModelo.php";
include "./views/AdminView.php";

class AdminController{

	private $model;
	
	function __construct(){
		$this->model = new Novedades();
		$this->view = new AdminView();
	}

	public function actionIndex(){
		
		$this->view->render($this->model->load_NovedadesAdmin());
		// $a = $this->model->load_NovedadesAdmin();
		// print_r($a);;
	}

	public function actionAgregarNovedad(){

		$urlDefault = "uploads/";
		
		$titulo = $_REQUEST['titulo'];
		$id_categoria = $_REQUEST['id_categoria'];
		//$url_img = $urlDefault.$_FILES[0]['name'];
		$url_img = $_REQUEST['imagesToUpload'][0];
		// $url_img = 'pepito.jpg'; //esto ya funciona
		$contenido = $_REQUEST['contenido'];	
		
		// $id_imagen=$this->NovedadesModelo->obtenerIdImg($url_img);//obtenerIdImg no anda nop
		$id_imagen=$this->model->obtenerIdImg($url_img);//obtenerIdImg no anda nop
		
		$arrNot = $this->model->agregarNovedad($titulo,$id_categoria,$contenido,
						$id_imagen);
		//$this->view->renderRecarga();

		echo '{ "result" :  "OK" }';
		return;		
	}
}

?>