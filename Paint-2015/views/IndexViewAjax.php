<?php

require('View.php');	

class IndexViewAjax extends View	{
    
    function set_pestania($pestania){
		$this->smarty->assign("pestania", $pestania);
	}

	function render(){
		$this->smarty->display('inicio_ajax.tpl');
	}	
}

?>