<?php
/* @var $this JmuserController */
/* @var $model Jmuser */

$this->breadcrumbs=array(
	'Jmusers'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Jmuser', 'url'=>array('index')),
	array('label'=>'Create Jmuser', 'url'=>array('create')),
	array('label'=>'Update Jmuser', 'url'=>array('update', 'id'=>$model->oa)),
	array('label'=>'Delete Jmuser', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->oa),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Jmuser', 'url'=>array('admin')),
);
?>

<h1>View Jmuser #<?php echo $model->oa; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'oa',
		'id',
		'password',
		'wave',
		'name',
		'level',
		'gender',
		'phone',
		'bq',
		'depart',
		'title',
		'race',
		'nation',
		'height',
		'weight',
		'eat',
		'friendname',
		'friendphone',
		'friendaddr',
		'onboardtime',
		'hotel',
		'room',
		'roommate',
		'idcard',
		'endorse',
		'city',
		'huji',
		'extra',
	),
)); ?>
