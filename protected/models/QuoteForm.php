<?php
class QuoteForm extends CFormModel{
	public $hehe;
	
	public function rules(){
		return array(
				array('hehe','required'),
		);
	}
}