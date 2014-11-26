<?php 

include_once("vista.php");


class Errores extends View
{

	public function error_login()
	{
		$this->smarty->display('errorLogueo.tpl');
	}
}