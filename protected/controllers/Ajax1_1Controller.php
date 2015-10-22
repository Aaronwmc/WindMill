<?php
class Ajax1_1Controller extends Controller{
	public function actionIndex() {
		$this->render('index',array('message'=>'this is index'));
	}
	
	public function actionAddAngle(){
		$this->renderPartial('_angle',array('message'=>'this is angle'));
	}
}