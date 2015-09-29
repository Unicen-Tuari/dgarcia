<?php

require('View.php');	

class TrabajosView extends View	{

	function render(){
		$this->smarty->display('trabajos.tpl');
	}
	
}


?>