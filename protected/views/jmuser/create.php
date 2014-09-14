<?php
/* @var $this JmuserController */
/* @var $model Jmuser */

$this->breadcrumbs=array(
	'Jmusers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Jmuser', 'url'=>array('index')),
	array('label'=>'Manage Jmuser', 'url'=>array('admin')),
);
?>

<h1>Create Jmuser</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>