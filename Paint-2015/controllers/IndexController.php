<?php



class IndexController{

	public function actionIndex(){
		include "./views/IndexView.php";
		$view = new IndexView;
		$view->render();
	}

	public function actionIndexAjax(){
		include "./views/IndexViewAjax.php";
		$view = new IndexViewAjax;
		$view->render();

	
	}
	
}

?>