<?php

require('View.php');	

class NovedadesViewAjax extends View{

	function render(){
		$this->smarty->display('novedades_ajax.tpl');
	}	
}

?>