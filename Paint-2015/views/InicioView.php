<?php

require('View.php');	

class IndexView extends View	{

	function render(){
		$this->smarty->display('inicio.tpl');
	}	
}

?>