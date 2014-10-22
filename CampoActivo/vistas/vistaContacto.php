<?php

require('vista.php');	

class ContactoView extends View{

	function render(){
		$this->smarty->display('contacto.tpl');
	}	

	function set_contacto($arrCont){
		$this->smarty->assign("contacto",$arrCont);		
	}

	function renderContacto(){
		$this->smarty->display('contacto.tpl');
	}	
}

?>