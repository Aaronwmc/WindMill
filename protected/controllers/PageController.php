<?php
class PageController extends Controller{
	public function actionIndex() {
		$rawData = array(
				array('id'=>1,'username'=>'aa','password'=>'aaaaaa'),
				array('id'=>2,'username'=>'bb','password'=>'aaaaaa'),
				array('id'=>3,'username'=>'cc','password'=>'aaaaaa'),
				array('id'=>4,'username'=>'dd','password'=>'aaaaaa'),
				array('id'=>5,'username'=>'ee','password'=>'aaaaaa'),
				array('id'=>6,'username'=>'ff','password'=>'aaaaaa'),
				array('id'=>7,'username'=>'gg','password'=>'aaaaaa'),
				array('id'=>8,'username'=>'hh','password'=>'aaaaaa'),
				array('id'=>9,'username'=>'jj','password'=>'aaaaaa'),
				array('id'=>10,'username'=>'qq','password'=>'aaaaaa'),
				array('id'=>11,'username'=>'www','password'=>'aaaaaa'),
				array('id'=>12,'username'=>'xx','password'=>'aaaaaa'),
				array('id'=>13,'username'=>'zz','password'=>'aaaaaa'),
		);
		 
		$dataProvider=new CArrayDataProvider($rawData, array(
				'id'=>'user',
				'sort'=>array(
						'attributes'=>array(
								'id', 'username', 'password',
						),
				),
				'pagination'=>array(
						'pageSize'=>10,
				),
		));
		$this->render('index',array('dataProvider'=>$dataProvider));
	}
}