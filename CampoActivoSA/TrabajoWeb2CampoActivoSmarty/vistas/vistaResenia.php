<?php

require('vista.php');	

class ReseniaView extends View{

	function render(){
		$this->smarty->display('resenia.tpl');
	}	
}


?>