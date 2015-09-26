<?php

require('View.php');	

class ContactoViewAjax extends View	{

	function render(){
		$this->smarty->display('contacto_ajax.tpl');
	}	
}

?>