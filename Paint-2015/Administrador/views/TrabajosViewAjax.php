<?php

require('View.php');	

class TrabajosViewAjax extends View	{

	function render(){
		$this->smarty->display('trabajos_ajax.tpl');
	}
	
}


?>