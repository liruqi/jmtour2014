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
	array('label'=>'Update Jmuser', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Jmuser', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Jmuser', 'url'=>array('admin')),
);
?>

<h1>View Jmuser #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'oa',
		'password',
		'wave',
		'name',
		'level',
		'gender',
		'phone',
		'bq',
		'depart',
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
	),
)); ?>
