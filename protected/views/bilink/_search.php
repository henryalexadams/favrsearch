<?php
/* @var $this BilinkController */
/* @var $model Bilink */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id',array('span'=>5)); ?>

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
        <?php echo TbHtml::submitButton('Search',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->