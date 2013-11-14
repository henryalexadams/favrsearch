<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'forum_id'); ?>
		<?php echo $form->textField($model,'forum_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'topic_id'); ?>
		<?php echo $form->textField($model,'topic_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'external_entity_id'); ?>
		<?php echo $form->textField($model,'external_entity_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'extra'); ?>
		<?php echo $form->textArea($model,'extra',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'views'); ?>
		<?php echo $form->textField($model,'views'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'votes'); ?>
		<?php echo $form->textField($model,'votes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anonymous'); ?>
		<?php echo $form->textField($model,'anonymous'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'insert_datetime'); ?>
		<?php echo $form->textField($model,'insert_datetime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inserter'); ?>
		<?php echo $form->textField($model,'inserter'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_edit_datetime'); ?>
		<?php echo $form->textField($model,'last_edit_datetime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_editor'); ?>
		<?php echo $form->textField($model,'last_editor'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->