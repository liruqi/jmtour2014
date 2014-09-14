<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		$authCode = 0;
		if (isset($_POST['LoginForm'])) {
            $form = $_POST['LoginForm'];
            $id = strtoupper($form['oa']);
            $identity=new JmIdentity($id, $form['password']);
            $authRet = $identity->authenticate();
            if ($authRet) {
                $duration= 3600*24; // 1 day
                Yii::app()->user->login($identity,$duration);
                $session = $this->session($id);
                $session['oa'] = $id;
                $this->session_write_close($id, $session);

                $model=Jmuser::model()->findByPk($id);
                /*
                $initpasswd = $model->idcard;
                if (strlen($initpasswd) > 6) {
                    $initpasswd = substr($initpasswd, strlen($initpasswd)-6);
                }*/
                if ($model->password == $form['password']) {
                    $this->redirect("?r=site/r1");
                } else {
                    $this->redirect("?r=site/p1");
                }
                return;
            } else {
                $authCode = $identity->errorCode;
            }
		}
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->renderPartial('p0', array('authCode' => $authCode));
	}

	public function actionP1()
	{
		$errorCode = 0;
		if (isset($_POST['LoginForm'])) {
            $form = $_POST['LoginForm'];
            $id = strtoupper(Yii::app()->getUser()->getName());
            $model=Jmuser::model()->findByPk($id);
            if ($form['password']===$form['passwd']) {
                $model->password = $form['password'];
                if ($model->save()) {
			    $this->redirect('?r=site/p2');
                return;
                }
                $errorCode = 2;
            }
            $errorCode = 1;
		}
		$this->renderPartial('p1', array('error' => $errorCode));
	}

    public function actionR1()
	{
		$authCode = 0;
        $id = strtoupper(Yii::app()->getUser()->getName());
        $model=Jmuser::model()->findByPk($id);
        if (! $model) {
            $this->redirect('?r=site');    
            return;
        }
		$this->renderPartial('r1', array('user' => $model));
	}

	public function actionP2()
	{
		$this->renderPartial('p2');
	}

	public function actionP3()
	{
		if (isset($_POST['LoginForm'])) {
			$this->redirect('?r=site/p4');
			return;
		}
		$this->renderPartial('p3');
	}

	public function actionP4()
    {
        $id = strtoupper(Yii::app()->getUser()->getName());
        $model=Jmuser::model()->findByPk($id);
        if (! $model) {
            $this->redirect('?r=site');    
            return;
        }
        $errorMessage = "";
        $routeCount = Jmroute::getRouteCount();
        if (isset($_POST['LoginForm'])) {
            $form=$_POST['LoginForm'];
            foreach ($form as $k => $v) {
                $model->$k = $v;
                if (empty($v)) {
                    $errorMessage = "缺少字段: " . $k;
                }
            }
            if (! isset($_POST['Extra']['luxian'])) {
                $errorMessage = "缺少字段: 路线选择" ;
            }

            if ( empty($errorMessage) ) {
                $luxian=$_POST['Extra']['luxian'];
                
                if (($routeCount[$luxian]) <= 0) {
                    $errorMessage = "路线选择失败" ;
                } else {
                    $model->extra = json_encode($_POST['Extra']);
                    if ($model->save()) {
                        Jmroute::setRoute($id, $_POST['Extra']['luxian']);
                        $this->redirect('?r=site/p5');
                        return;
                    } 
                    $errorMessage = "保存失败 :(";
                }
            }
        }

        $model->extra = json_decode($model->extra, true);
        if (! $model->extra['luxian']) $model->extra['luxian']="养生之旅";
        //var_dump(Jmroute::getRouteCount());
        $this->renderPartial('p4', 
            array(
                'user'=>$model, 'error' => $errorMessage, 'route' => $routeCount 
            )
        );
	}

	public function actionP5()
    {
        $oa = strtoupper(Yii::app()->getUser()->getName());
        $model=Jmuser::model()->findByPk($oa);
        if (! $model) {
            $this->redirect('?r=site');
            return;
        }
        if ("POST" == $_SERVER["REQUEST_METHOD"]) {
            if (isset($_POST['ok'])) {
                $this->redirect('?r=site/p6');
            } else {
                $this->redirect('?r=site/p4');
            }
			return;
		}
        $model->extra = json_decode($model->extra, true);
		$this->renderPartial('p5', array('user'=>$model));
	}
    
    public function actionR5()
    {
        $oa = strtoupper(Yii::app()->getUser()->getName());
        $model=Jmuser::model()->findByPk($oa);
        if (! $model) {
            $this->redirect('?r=site');
            return;
        }
        $model->extra = json_decode($model->extra, true);
		$this->renderPartial('r5', array('user'=>$model));
    }

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}

    private function session($id) {
        $filename = "/tmp/jmoa." . $id;
        if (file_exists($filename)) {
            $r = json_decode(file_get_contents($filename), TRUE);
            if ($r) return $r;
        }
        return array();
    }

    private function session_write_close($id, $s) {
        $filename = "/tmp/jmoa." . $id;
        file_put_contents($filename, json_encode($s));
    }

}
