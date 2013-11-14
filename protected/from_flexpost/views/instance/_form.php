<?php
/* @var $this InstanceController */
/* @var $model Instance */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'instance-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'item_type'); ?>
		<?php echo $form->textField($model,'item_type',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'item_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'item_id'); ?>
		<?php echo $form->textField($model,'item_id'); ?>
		<?php echo $form->error($model,'item_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'config'); ?>
		<?php echo $form->textArea($model,'config',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'config'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'insert_datetime'); ?>
		<?php echo $form->textField($model,'insert_datetime'); ?>
		<?php echo $form->error($model,'insert_datetime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inserter'); ?>
		<?php echo $form->textField($model,'inserter'); ?>
		<?php echo $form->error($model,'inserter'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_edit_datetime'); ?>
		<?php echo $form->textField($model,'last_edit_datetime'); ?>
		<?php echo $form->error($model,'last_edit_datetime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_editor'); ?>
		<?php echo $form->textField($model,'last_editor'); ?>
		<?php echo $form->error($model,'last_editor'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->