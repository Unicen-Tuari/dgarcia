<?php

require('View.php');	

class NovedadesViewAjax extends View{

	function set_novedades($arrN,$cat)
	{
		$cantidad = count($arrN);
		
		$this->smarty->assign("cantidad",$cantidad);
		$this->smarty->assign("noticias",$arrN);
		$this->smarty->assign("categoria",$cat);
	}

	function render(){
		$this->smarty->display('novedades_ajax.tpl');
	}	

	function set_novedad($nov)
	{		
		$this->smarty->assign("novedad",$nov);
	}

	function render_novedad(){
		$this->smarty->display('amplia_noticia.tpl');
	}
}

?>