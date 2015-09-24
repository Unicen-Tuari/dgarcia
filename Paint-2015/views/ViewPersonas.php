<?php

require('./views/View.php');	

class VistaPersona extends View{

	function mostrar_personas($personas){
	//"personas" se tranforma en $personas en el foreach en from,dentro de personas.tpl
		$this->smarty->assign("personas", $personas);
		echo '<pre>';
		print_r($personas);
		echo '</pre>';
		$this->smarty->display('personas.tpl');
	}
	
}


?>