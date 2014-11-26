<?php 

include_once("vista.php");


class Errores extends View
{

	public function error_login()
	{
		$this->smarty->display('errorLogueo.tpl');
	}

	public function error_registro()
	{
		$this->smarty->display('errorRegistro.tpl');
	}
}