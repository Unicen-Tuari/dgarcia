<?php

require('View.php');	

class GaleriaView extends View{

	function render(){
		$this->smarty->display('galeria.tpl');
	}	
}

?>