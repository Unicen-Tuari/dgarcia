<?php

require('vista.php');	

class ContactoView extends View{

	function render(){
		$this->smarty->display('contacto.tpl');
	}	
}


?>