<?php

require('View.php');	

class TarifasView extends View{

	function render(){
		$this->smarty->display('tarifas.tpl');
	}	
}

?>