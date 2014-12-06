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
        } else if(intval($initpasswd)==intval($this->password)) {
            if (in_array($this->username, array(1010672,
                1010710,
                10107162,
                10107186,
                10107187,
                10107242,
                10107271,
                10107316,
                10107323,
                10107404,
                10107498,
                10107598,
                10107713,
                10107740,
                10107823,
                10107871,
                10107984,
                1018232,
                1018243,
            19540824)))
            $this->errorCode=self::ERROR_NONE;
            else 
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
		} else {
            header("X-authenticate: ".$this->username." - ".$initpasswd . " <> " . $this->password); 
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
        }
		return !$this->errorCode;
	}
}
