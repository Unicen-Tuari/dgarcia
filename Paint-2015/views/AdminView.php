<?php

require('View.php');	

class AdminView extends View{

	function render($datos){

		$this->smarty->assign('noticias',$datos);
		$this->smarty->display('admin.tpl');
	}

	function mostrarParcial($noticias){

	  // $this->smarty->assign('errores', $this->errores);
	  $this->smarty->assign('noticias', $noticias);
	  $this->smarty->display('noticiasPartial.tpl');
	}

	function mostrarBorrar($noticias){

	  // $this->smarty->assign('errores', $this->errores);
	  $this->smarty->assign('noticias', $noticias);
	  $this->smarty->display('admin.tpl');
	}
}

?>