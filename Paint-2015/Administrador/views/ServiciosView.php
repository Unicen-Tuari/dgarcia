<?php

require('View.php');	

class ServiciosView extends View
{
	function render()
	{
		$this->smarty->display('servicios.tpl');
	}	
}

?>