<?php
/* @var $this BilinkController */
/* @var $model Bilink */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'bilink-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

            <?php echo $form->textFieldControlGroup($model,'context',array('span'=>5,'maxlength'=>100)); ?>

            <?php echo $form->textFieldControlGroup($model,'left_what',array('span'=>5,'maxlength'=>50)); ?>

            <?php echo $form->textFieldControlGroup($model,'left_id',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'left_weight',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'right_what',array('span'=>5,'maxlength'=>50)); ?>

            <?php echo $form->textFieldControlGroup($model,'right_id',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'right_weight',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'status',array('span'=>5,'maxlength'=>50)); ?>

            <?php echo $form->textFieldControlGroup($model,'insert_datetime',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'inserter',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'last_edit_datetime',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'last_editor',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'insert_datetime_utc',array('span'=>5,'maxlength'=>50)); ?>

            <?php echo $form->textFieldControlGroup($model,'last_edit_datetime_utc',array('span'=>5,'maxlength'=>50)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array(
		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
		    'size'=>TbHtml::BUTTON_SIZE_LARGE,
		)); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->