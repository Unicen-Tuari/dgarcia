<?php

require('View.php');	

class GaleriaViewAjax extends View{

	function set_Imagenes($arrI,$cat)
	{
		$cantidad = count($arrI);
		
		$this->smarty->assign("cantidad",$cantidad);
		$this->smarty->assign("imagenes",$arrI);
		$this->smarty->assign("categoria",$cat);
	}

	function render(){
		$this->smarty->display('galeria_ajax.tpl');
	}	
}

?>