<?php
/* @var $this JmuserController */
/* @var $model Jmuser */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jmuser-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'oa'); ?>
		<?php echo $form->textField($model,'oa',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'oa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'wave'); ?>
		<?php echo $form->textField($model,'wave',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'wave'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'level'); ?>
		<?php echo $form->textField($model,'level',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'level'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php echo $form->textField($model,'gender',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bq'); ?>
		<?php echo $form->textField($model,'bq',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'bq'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'depart'); ?>
		<?php echo $form->textField($model,'depart',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'depart'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'race'); ?>
		<?php echo $form->textField($model,'race',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'race'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nation'); ?>
		<?php echo $form->textField($model,'nation',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'nation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'height'); ?>
		<?php echo $form->textField($model,'height',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'height'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'weight'); ?>
		<?php echo $form->textField($model,'weight',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'weight'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'eat'); ?>
		<?php echo $form->textField($model,'eat',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'eat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'friendname'); ?>
		<?php echo $form->textField($model,'friendname',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'friendname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'friendphone'); ?>
		<?php echo $form->textField($model,'friendphone',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'friendphone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'friendaddr'); ?>
		<?php echo $form->textField($model,'friendaddr',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'friendaddr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'onboardtime'); ?>
		<?php echo $form->textField($model,'onboardtime',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'onboardtime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hotel'); ?>
		<?php echo $form->textField($model,'hotel',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'hotel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'room'); ?>
		<?php echo $form->textField($model,'room',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'room'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'roommate'); ?>
		<?php echo $form->textField($model,'roommate',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'roommate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idcard'); ?>
		<?php echo $form->textField($model,'idcard',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'idcard'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'endorse'); ?>
		<?php echo $form->textField($model,'endorse',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'endorse'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'huji'); ?>
		<?php echo $form->textField($model,'huji',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'huji'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'extra'); ?>
		<?php echo $form->textArea($model,'extra',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'extra'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->