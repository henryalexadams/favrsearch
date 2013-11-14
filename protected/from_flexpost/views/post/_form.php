<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'post-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'forum_id'); ?>
		<?php echo $form->textField($model,'forum_id'); ?>
		<?php echo $form->error($model,'forum_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'topic_id'); ?>
		<?php echo $form->textField($model,'topic_id'); ?>
		<?php echo $form->error($model,'topic_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'external_entity_id'); ?>
		<?php echo $form->textField($model,'external_entity_id'); ?>
		<?php echo $form->error($model,'external_entity_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'extra'); ?>
		<?php echo $form->textArea($model,'extra',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'extra'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'views'); ?>
		<?php echo $form->textField($model,'views'); ?>
		<?php echo $form->error($model,'views'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'votes'); ?>
		<?php echo $form->textField($model,'votes'); ?>
		<?php echo $form->error($model,'votes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anonymous'); ?>
		<?php echo $form->textField($model,'anonymous'); ?>
		<?php echo $form->error($model,'anonymous'); ?>
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