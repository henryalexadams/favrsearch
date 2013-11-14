<?php
/* @var $this ProjectController */
/* @var $model Project */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'name',array('span'=>5,'maxlength'=>200)); ?>

                    <?php echo $form->textFieldControlGroup($model,'type',array('span'=>5,'maxlength'=>50)); ?>

                    <?php echo $form->textFieldControlGroup($model,'description',array('span'=>5,'maxlength'=>300)); ?>

                    <?php echo $form->textAreaControlGroup($model,'details',array('rows'=>6,'span'=>8)); ?>

                    <?php echo $form->textFieldControlGroup($model,'originator',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'owner',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'status',array('span'=>5,'maxlength'=>50)); ?>

                    <?php echo $form->textFieldControlGroup($model,'insert_datetime',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'inserter',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'last_edit_datetime',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'last_editor',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'insert_datetime_utc',array('span'=>5,'maxlength'=>50)); ?>

                    <?php echo $form->textFieldControlGroup($model,'last_edit_datetime_utcc',array('span'=>5,'maxlength'=>50)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton('Search',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->