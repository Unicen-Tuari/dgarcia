<?php

class ContactoController{
	
	public function actionContacto(){
		include "./views/ContactoView.php";
		$view = new ContactoView;
		$view->render();
	}

	public function actionContactoAjax(){
		include "./views/ContactoViewAjax.php";
		$view = new ContactoViewAjax;
		$view->render();
	}
	
}

?>