<?php

require('vista.php');	

class MaquinaView extends View
{		
	function set_maquinas($arrM)
	{
		$cantidad = count($arrM);
		
		$this->smarty->assign("cantidad",$cantidad);
		$this->smarty->assign("maquinas",$arrM);
	}

	function set_imgMaq($arrIM)
	{
		$this->smarty->assign("imagenes",$arrIM);		
	}

	function render()
	{
		$this->smarty->display('maquinaC.tpl');
	}	

	function renderCM()
	{
		$this->smarty->display('carouselMaq.tpl');
	}

	function nuevaMaquina()
	{
		$this->smarty->display('agregarMaq.tpl'); 
	}

	function modificarMaquina($maquina)
	{	
		if (isset($_SESSION['usuario']))
			$this->SetUser($_SESSION['usuario']);

		$this->smarty->assign("maquinas",$maquina);
		$this->smarty->display('modificarMaq.tpl'); 
	}

	function busqueda($Resultado)
	{
		$cantidad = count($Resultado);

		$this->smarty->assign("cantidad",$cantidad);
		$this->smarty->assign("maquinas",$Resultado);		
		$this->smarty->display('solomaquinasC.tpl');
	}
}

?>