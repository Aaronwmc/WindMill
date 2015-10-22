<?php
class AjaxTestController extends Controller{
	public function actionIndex(){
		$this->render('index');
	}
	
	public function actionAjax(){
		$addr = Yii::app()->request->getParam('curAddr');  
        $port = Yii::app()->request->getParam('curPort');  
        $service = Yii::app()->request->getParam('curService');  
        $param = Yii::app()->request->getParam('curParam');  
          
        echo $addr . $port . $service . $param; 
	}
}