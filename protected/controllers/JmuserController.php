<?php

class JmuserController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','dump'),
				'users'=>array('admin','zhongmai','zhongqinglv'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('admin','zhongmai','zhongqinglv'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin','zhongmai','zhongqinglv'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

    public function actionDump() {
        Yii::import('ext.yiiexcel.YiiExcel', true);
        Yii::registerAutoloader(array('YiiExcel', 'autoload'), true);
    
        $root =  dirname(dirname(dirname(__FILE__)));
        $ts = (int)(time() / 100);
        $filePath = $root . "/download/{$ts}.xlsx";
        if (file_exists($filePath)) {
            header ("Location: /download/{$ts}.xlsx");
            echo ("Cache: hit");
            exit();
        }

        $model=new Jmuser('search');
        $model->unsetAttributes();  // clear any default values
        $model->attributes=array();
        $data = $model->search();
        $data->setPagination (false);
        $objPHPExcel = new PHPExcel();
        $row = 1;


        $base = 0; 
        $labels = $model->attributeLabels();
        foreach (Jmuser::dumpFields() as $col => $field) {
            $name = isset( $labels[$field] ) ? $labels[$field] : $field;
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col , $row, $name);
            $base += 1;
        }
        
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($base , $row, "出生日期");
        $base += 1;
         
        foreach (Jmuser::extraFields() as $col => $field) {
            $name = isset( $labels[$field] ) ? $labels[$field] : $field;
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($base , $row, $name);
            $base += 1;
        }

        foreach (Jmuser::paperFields() as $col => $field) {
            $name = isset( $labels[$field] ) ? $labels[$field] : $field;
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($base , $row, $name);
            $base += 1;
        }

        
        //var_dump($cnt, $data->getItemCount(),  $data->getTotalItemCount());
        $users = $data->getData( array("order" => "sysID"));
        foreach ($users as $key => $user)
        {
            // echo  "{$row}/" . count($users) . " " . $user->oa . "\n";
            $row += 1;
            $base = 0; 
            foreach (Jmuser::dumpFields() as $col => $field) {
                $val = $user->$field;
                $cell = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($col, $row);
                $cell->setValueExplicit($val, PHPExcel_Cell_DataType::TYPE_STRING);
                $base += 1;
            }

            $cell = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($base, $row);
            $cell->setValueExplicit(substr($user->idcard,6,8));
            $base += 1;

            $extra = json_decode($user->extra, true);
            foreach (Jmuser::extraFields() as $col => $field) {
                $cell = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($base, $row);
                $cell -> setValueExplicit($extra[$field], PHPExcel_Cell_DataType::TYPE_STRING);
                $base += 1;
            }

            $paper = json_decode($user->paper, true);
            foreach (Jmuser::paperFields() as $col => $field) {
                
                $cell = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($base, $row);
                if (isset($paper[$field]))
                $cell -> setValueExplicit($paper[$field], PHPExcel_Cell_DataType::TYPE_STRING);
                $base += 1;
            }
        }
        $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);

        $objWriter->save($filePath);
        header ("Location: /download/{$ts}.xlsx");

    }

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
            'model'=>$this->loadModel($id),
            'submit'=>(strtolower(Yii::app()->getUser()->getName()) != "zhongmai")
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Jmuser;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Jmuser']))
		{
			$model->attributes=$_POST['Jmuser'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->oa));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

        if (! $model) {
            $this->redirect('?r=jmuser');    
            return;
        }
        $errorMessage = "";
        $routeCount = Jmroute::getRouteCount($model->wave);
        $extra = json_decode($model->extra, true);

        if (isset($_POST['LoginForm'])) {
            $extra = $_POST['Extra'];
            $form=$_POST['LoginForm'];
            $translate = $model->attributeLabels();
            $errorMessage = "";
            /*
            foreach ($form as $k => $v) {
                $model->$k = $v;
                if (empty($v)) {
                    $fieldName = isset($translate[$k]) ? $translate[$k]:$k;
                    $errorMessage = "所有信息均为必填，缺少信息: " . $fieldName;
                }
            }
            foreach (Jmuser::extraFields() as $idx => $f) {
                if (empty($extra[$f])) {
                    $fieldName = isset($translate[$f]) ? $translate[$f]:$f;
                    $errorMessage = "所有信息均为必填，缺少信息: {$fieldName}" ;
                }
            }
            foreach (Jmuser::paperFields() as $idx => $f) {
                if (empty($_POST['Paper'][$f])) {
                    $fieldName = isset($translate[$f]) ? $translate[$f]:$f;
                    $errorMessage = "所有信息均为必填，缺少信息: {$fieldName}" ;
                }
            }
             */
            $model->extra = json_encode($_POST['Extra']);
            $model->paper = json_encode($_POST['Paper']);
            if ( empty($errorMessage) ) {
                $luxian=$extra['luxian'];
                
                if (($routeCount[$luxian]) <= 0) {
                    $errorMessage = "路线选择失败" ;
                } else {
                    if ($model->save()) {
                        Jmroute::setRoute($model->wave, $id, $_POST['Extra']['luxian']);
                        $this->redirect('?r=jmuser');
                        return;
                    } 
                    $errorMessage = "保存失败 :(";
                }
            }
        }

        $model->extra = json_decode($model->extra, true);;
        $model->paper = json_decode($model->paper, true);;
        $this->renderPartial('update', 
            array(
                'user'=>$model, 'error' => $errorMessage, 'route' => $routeCount,

                'submit'=>(strtolower(Yii::app()->getUser()->getName()) != "zhongmai")
            )
        );
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
        $model=new Jmuser('search');
        $model->unsetAttributes();  // clear any default values

        if(isset($_POST['Jmuser'])) {
            if (is_array($_POST['Jmuser'])) {
                $model->attributes=$_POST['Jmuser'];
                $dataProvider=$model->search();
            } else {
                $model->oa = $_POST['Jmuser'];
                $model->name = $_POST['Jmuser'];
                $model->idcard = $_POST['Jmuser'];
                $model->phone = $_POST['Jmuser'];
                $dataProvider=$model->orSearch();
            }
        } else {
            $dataProvider = $model->search();
        }
		$this->render('admin',array(
			'dataProvider'=>$dataProvider,
            'submit'=>(strtolower(Yii::app()->getUser()->getName()) != "zhongmai")
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Jmuser('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_POST['Jmuser']))
			$model->attributes=$_POST['Jmuser'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Jmuser the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Jmuser::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Jmuser $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='jmuser-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
