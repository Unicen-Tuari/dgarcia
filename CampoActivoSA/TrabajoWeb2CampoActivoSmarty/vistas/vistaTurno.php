<?php

require('vista.php');	

class TurnoView extends View{

	function render(){
		$this->smarty->display('turno.tpl');
	}	
}


?>