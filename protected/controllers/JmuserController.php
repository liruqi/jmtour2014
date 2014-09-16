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
				'users'=>array('admin'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('admin'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
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

        foreach (Jmuser::fields() as $col => $field) {
            $labels = $model->attributeLabels();
            $name = isset( $labels[$field] ) ? $labels[$field] : $field;
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col , $row, $name);
        }
        //var_dump($cnt, $data->getItemCount(),  $data->getTotalItemCount());
        $users = $data->getData( array("order" => "sysID"));
        foreach ($users as $key => $user)
        {
            // echo  "{$row}/" . count($users) . " " . $user->oa . "\n";
            $row += 1;
            foreach (Jmuser::fields() as $col => $field) {
                $val = $user->$field;
                $cell = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($col, $row);
                $cell->setValueExplicit($val, PHPExcel_Cell_DataType::TYPE_STRING);
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
            $this->redirect('?r=jmuser/admin');    
            return;
        }
        $errorMessage = "";
        $routeCount = Jmroute::getRouteCount();
        if (isset($_POST['LoginForm'])) {
            $form=$_POST['LoginForm'];
            $translate = $model->attributeLabels();
            foreach ($form as $k => $v) {
                $model->$k = $v;
                if (empty($v)) {
                    $errorMessage = "所有信息均为必填，缺少信息: " . $fieldName;
                }
            }

            if (! isset($_POST['Extra']['luxian'])) {
                $errorMessage = "所有信息均为必填，缺少信息: 路线选择" ;
            }

            foreach (Jmuser::paperFields() as $idx => $f) {
                if (! isset($_POST['Paper'][$f])) {
                    $errorMessage = "所有信息均为必填，缺少信息: {$f}" ;
                }
            }

            $model->extra = json_encode($_POST['Extra']);
            $model->paper = json_encode($_POST['Paper']);
            if ( empty($errorMessage) ) {
                $luxian=$_POST['Extra']['luxian'];
                
                if (($routeCount[$luxian]) <= 0) {
                    $errorMessage = "路线选择失败" ;
                } else {
                    if ($model->save()) {
                        Jmroute::setRoute($id, $_POST['Extra']['luxian']);
                        $this->redirect('?r=jmuser/admin');
                        return;
                    } 
                    $errorMessage = "保存失败 :(";
                }
            }
        }

        $model->extra = json_decode($model->extra, true);;
        $model->paper = json_decode($model->paper, true);;
        //var_dump(Jmroute::getRouteCount());
        $this->renderPartial('update', 
            array(
                'user'=>$model, 'error' => $errorMessage, 'route' => $routeCount 
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
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
        $dataProvider=new CActiveDataProvider('Jmuser',
            array(
                'pagination' => array (
                    'pageSize' => 500
                ),
            )
        );
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Jmuser('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Jmuser']))
			$model->attributes=$_GET['Jmuser'];

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
