<?php

require('View.php');	

class ServiciosViewAjax extends View
{
	function render()
	{
		$this->smarty->display('servicios_ajax.tpl');
	}	
}

?>