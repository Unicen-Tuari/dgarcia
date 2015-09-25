<?php

class ContactoController{
	
	public function actionContacto(){
		include "./views/ContactoView.php";
		$view = new ContactoView;
		$view->render();
	}
	
}

?>