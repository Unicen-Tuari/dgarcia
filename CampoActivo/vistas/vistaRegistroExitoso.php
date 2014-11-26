<?php

include('vista.php');


class vistaRegExitoso extends View
{
	public function r_exitoso()
	{
		$this->smarty->display('registrado_exitoso.tpl');
	}

}

?>