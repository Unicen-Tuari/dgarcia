<?php

class ContactoController{
	
	public function actionContacto(){
		include "./vistas/vistaContacto.php";
		$view = new ContactoView;
		$view->render();
	}
}

?>