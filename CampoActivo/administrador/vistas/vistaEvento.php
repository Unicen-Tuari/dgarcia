<?php

require('vista.php');	

class EventoView extends View{

	function set_eventos($arrE){
		$this->smarty->assign("eventos",$arrE);
	}
	function set_img($arrI){
		$this->smarty->assign("imagenes",$arrI);		
	}

	function render(){
		$this->smarty->display('evento.tpl');
	}	

	function renderC(){
		$this->smarty->display('carouselE.tpl');
	}

	function nuevoEvento()
	{
		$this->smarty->display('agregarE.tpl'); //agregarE
	}

	function modificarEvento($evento)
	{
		$this->smarty->assign("eventos",$evento);
		$this->smarty->display('modificarEvento.tpl'); 
	}

}

?>