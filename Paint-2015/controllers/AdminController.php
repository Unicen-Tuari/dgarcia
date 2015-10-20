<?php
include "./models/NovedadesModelo.php";
include "./models/CategoriasModelo.php";
include "./views/AdminView.php";

class AdminController{

	private $model;
	
	function __construct(){

		$this->model = new Novedades();
		$this->view = new AdminView();
	}

	public function actionIndex(){
		$catModel = new Categorias();
		$this->view->render($this->model->load_NovedadesAdmin(), $catModel->load_Categorias());		
	}

	function mostrarHome(){
		$catModel = new Categorias();
    	$this->view->render($this->model->getNoticias(), $catModel->load_Categorias());
	}

	function mostrarHomeParcial(){

    	$this->view->mostrarParcial($this->model->getNoticias());
	}

	function mostrarBorrar(){

    	$this->view->mostrarBorrar($this->model->getNoticias());
	}
	  
	function agregarNovedad(){	  	 

		if(isset($_REQUEST['titulo']) 
			&& isset($_REQUEST['contenido']) 
			&& isset($_REQUEST['id_categoria']) 
			&& isset($_FILES['imagesToUpload'])
			){
	        $this->model->agregarNoticia($_REQUEST['titulo'],$_REQUEST['contenido'],$_FILES['imagesToUpload'], $_REQUEST['id_categoria']);
	    }
	    $this->mostrarHomeParcial();	      
	}

	function borrarNovedad(){

	    if(isset($_REQUEST['id_task'])){

	      $this->model->borrarNovedad($_REQUEST['id_task']);
	    }
	    // else{
	    //   $this->view->mostrarError('La tarea que intenta borrar no existe');
	    // }
	    $this->mostrarBorrar();
	}

	function agregarImagenes(){

	    if(isset($_REQUEST['id_task']) && isset($_FILES)){
	      $this->model->agregarImagenes($_REQUEST['id_task'],$_FILES);
	      echo '{ "result" :  "OK" }';
	    }else{
	      echo '{ "result" :  "Faltan paramentros" }';
	    }
	}
}

?>