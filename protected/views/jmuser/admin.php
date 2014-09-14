<?php
/* @var $this JmuserController */
/* @var $model Jmuser */

$this->breadcrumbs=array(
	'Jmusers'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Jmuser', 'url'=>array('index')),
	array('label'=>'Create Jmuser', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#jmuser-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Jmusers</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'jmuser-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'oa',
		'id',
		'password',
		'wave',
		'name',
		'level',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
