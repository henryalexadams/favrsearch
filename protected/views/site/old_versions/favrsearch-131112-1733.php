<?php
/* @var $this SiteController */
/* @var $model FavrsearchForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Favr Search';
$this->breadcrumbs=array(
	'FavrSearch',
);
?>

<h1>Favr Search</h1>

<?php if(Yii::app()->user->hasFlash('favrsearch')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('favrsearch'); ?>
</div>

<?php else: ?>

<p>
This form will submit the search criteria to the location_search api.
</p>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'favrsearch-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'latitude'); ?>
		<?php echo $form->textField($model,'latitude'); ?>
		<?php echo $form->error($model,'latitude'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'longitude'); ?>
		<?php echo $form->textField($model,'longitude'); ?>
		<?php echo $form->error($model,'longitude'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'radius'); ?>
		<?php echo $form->textField($model,'radius'); ?>
		<?php echo $form->error($model,'radius'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'terms'); ?>
		<?php echo $form->textField($model,'terms',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'terms'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category_search'); ?>
		<?php echo $form->checkBox($model,'category_search'); ?>
		<?php echo $form->error($model,'category_search'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>