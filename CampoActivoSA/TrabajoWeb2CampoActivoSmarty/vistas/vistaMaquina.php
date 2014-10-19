<?php

require('vista.php');	

class MaquinaView extends View{

	function render(){
		$this->smarty->display('maquina.tpl');
	}	
}


?>