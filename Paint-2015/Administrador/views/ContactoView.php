<?php

require('View.php');	

class ContactoView extends View	{

	function render(){
		$this->smarty->display('contacto.tpl');
	}	
}

?>