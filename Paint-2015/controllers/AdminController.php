<?php
include "./models/NovedadesModelo.php";

class AdminController{

	private $model;
	
	function __construct(){
		$this->model = new Novedades();
		
	}

	public function actionIndex(){
		include "./views/AdminView.php";
		$view = new AdminView();
		$view->render($this->model->load_NovedadesAdmin());
	}

	public function actionAgregarNovedad(){
		if(isset($_REQUEST['titulo']) && isset($_FILES) && isset($_REQUEST['detalle'])){
      		$this->model->agregarNovedad($_REQUEST['titulo'],$_FILES,$_REQUEST['detalle']);
      		echo '{ "result" :  "OK" }';
    	}else{
      		echo '{ "result" :  "Faltan paramentros" }';
    	}
	}
}

?>