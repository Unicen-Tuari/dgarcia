<?php

require('View.php');	

class AdminView extends View{

	function render($datos){
		$this->smarty->assign("noticias",$datos);
		$this->smarty->display('admin.tpl');
	}	
}

?>