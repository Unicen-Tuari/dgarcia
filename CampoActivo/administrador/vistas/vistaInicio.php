<?php

require_once('vista.php');	

class IndexView extends View
{
	function render()
	{
		$this->smarty->display('inicio.tpl');
	}	
}

?>