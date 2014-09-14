<?php
/* @var $this JmuserController */
/* @var $model Jmuser */

$this->breadcrumbs=array(
	'Jmusers'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Jmuser', 'url'=>array('index')),
	array('label'=>'Create Jmuser', 'url'=>array('create')),
	array('label'=>'View Jmuser', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Jmuser', 'url'=>array('admin')),
);
?>

<h1>Update Jmuser <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>