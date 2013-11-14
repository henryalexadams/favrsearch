<?php
/* @var $this ExternalEntityController */
/* @var $model ExternalEntity */
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
		<?php echo $form->label($model,'external_entity_type'); ?>
		<?php echo $form->textField($model,'external_entity_type',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'external_entity_key_name'); ?>
		<?php echo $form->textField($model,'external_entity_key_name',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'external_entity_id'); ?>
		<?php echo $form->textField($model,'external_entity_id',array('size'=>50,'maxlength'=>50)); ?>
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