<?php

	include "./modelos/modeloContacto.php";
	include "./vistas/vistaContacto.php";
	
	class ContactoController{
		
		public function actionContacto(){
			
			$view = new ContactoView;
			$view->render();
		}

		public function actionMensaje($nombre,$correoelectronico,$telefono,$mensaje){
			
			$contacto = new Contacto;
			$view = new ContactoView;
				
			$arrCont = $contacto->nuevoMensaje($nombre,$correoelectronico,$telefono,$mensaje);		 	 
			
			$view->set_contacto($arrCont);

			$view->renderContacto();
		}

	}



?>