<?php

require('vista.php');	

class EventoView extends View
{
	function set_eventos($arrE)
	{
		$cantidad = count($arrE);

		$this->smarty->assign("cantidad",$cantidad);
		$this->smarty->assign("eventos",$arrE);
	}

	function set_img($arrI)
	{
		$this->smarty->assign("imagenes",$arrI);		
	}

	function render()
	{
		$this->smarty->display('eventoC.tpl');
	}	

	function renderC()
	{
		$this->smarty->display('carouselE.tpl');
	}

	function nuevoEvento()
	{
		$this->smarty->display('agregarE.tpl'); 
	}

	function modificarEvento($evento)
	{
		$this->smarty->assign("eventos",$evento);
		$this->smarty->display('modificarEvento.tpl'); 
	}

	function busqueda($Resultado)
	{
		$cantidad = count($Resultado);
		
		$this->smarty->assign("cantidad",$cantidad);
		$this->smarty->assign("eventos",$Resultado);
		$this->smarty->display('soloeventoC.tpl');		
	}
}

?>