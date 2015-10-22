<?php
class ValidationTestForm extends CFormModel{
	public $vdName;
	
	public function rules(){
		return array(
				array('vdName','required','message'=>'输入不能为空'),
		);
	}
	
	/* public function attributeLabels() {
		return array (
				'vdName' => 'vd 名',
		);
	}
	 */
	
}
