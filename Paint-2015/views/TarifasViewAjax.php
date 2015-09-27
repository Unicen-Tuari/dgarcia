<?php

require('View.php');	

class TarifasViewAjax extends View{

	function render(){
		$this->smarty->display('tarifas_ajax.tpl');
	}	
}

?>