<?php
class VdtForm extends CFormModel{
	public $newFolderName;
	
	public function rules (){
		return array(
				array('newFolderName','required','message'=>'newFolderName不能为空'),
		);
	}
}