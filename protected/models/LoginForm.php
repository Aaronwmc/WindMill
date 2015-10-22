<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class LoginForm extends CFormModel {
	public $username;
	public $password;
	public $rememberMe;
	private $_identity;
	
	/**
	 * 声明属性规则
	 */
	
	public function rules() {
		return array (
				// username and password are required
				array (
						'username, password',
						'required' 
				),
				
				// rememberMe needs to be a boolean
				array (
						'rememberMe',
						'boolean' 
				) 
		);
	}
	
	/**
	 * 声明属性标签
	 */
	public function attributeLabels() {
		return array (
				'username' => '用户名',
				'password' => '密码',
				'rememberMe' => '记住密码' 
		);
	}
	
	/**
	 * 授权
	 */
	public function authenticate($attribute, $params) {
		if (! $this->hasErrors ()) {
			$this->_identity = new UserIdentity ( $this->username, $this->password );
			if (! $this->_identity->authenticate ()) {
				$this->addError ( 'password', '密码无效' );
			}
		}
	}
	
	/**
	 * 登陆
	 */
	public function login() {
		if ($this->_identity === null) {
			$this->_identity = new UserIdentity ( $this->username, $this->password );
			$this->_identity->authenticate ();
		}
		
		if ($this->_identity->errorCode === UserIdentity::ERROR_NONE) {
			$duration = $this->rememberMe ? 3600 * 24 * 7 : 0; // 7 days
			Yii::app ()->user->login ( $this->_identity, $duration );
			return true;
		} elseif ($this->_identity->errorCode === UserIdentity::ERROR_USERNAME_INVALID) {
			$this->addError ( 'password', '用户名及密码无效' );
		} else{
			$this->addError ( 'password', '服务器无法访问' );
		}
		
		return false;
	}
}