<?php

require('View.php');	

class NovedadesView extends View{

	function render(){
		$this->smarty->display('novedades.tpl');
	}	
}

?>