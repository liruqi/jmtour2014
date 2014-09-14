<?php
/* @var $this JmuserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jmusers',
);

$this->menu=array(
	array('label'=>'Create Jmuser', 'url'=>array('create')),
	array('label'=>'Manage Jmuser', 'url'=>array('admin')),
);
?>

<h1>Jmusers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
