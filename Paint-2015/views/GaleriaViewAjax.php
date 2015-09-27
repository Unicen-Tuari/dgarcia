<?php

require('View.php');	

class GaleriaViewAjax extends View{

	function render(){
		$this->smarty->display('galeria_ajax.tpl');
	}	
}

?>