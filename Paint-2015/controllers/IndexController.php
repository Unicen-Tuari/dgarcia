<?php

class IndexController{
	
	public function actionIndex(){
		include "./views/IndexView.php";
		$view = new IndexView;
		$view->render();
	}
	
}

?>