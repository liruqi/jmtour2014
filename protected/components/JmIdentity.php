<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class JmIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$model=Jmuser::model()->findByPk($this->username);
		
		if($model === null) {
			$this->errorCode=self::ERROR_USERNAME_INVALID;
            return !$this->errorCode;
        }
        $initpasswd = $model->idcard;
        if (strlen($initpasswd) > 6) {
            $initpasswd = substr($initpasswd, strlen($initpasswd)-6);
        }
        if (empty($this->password)) {
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
        } else if($model->password===$this->password) {
			$this->errorCode=self::ERROR_NONE;
        } else if($initpasswd===$this->password) {
			$this->errorCode=self::ERROR_NONE;
		} else {
            header("X-authenticate: ".$this->username." - ".$initpasswd . " <> " . $this->password); 
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
        }
		return !$this->errorCode;
	}
}
