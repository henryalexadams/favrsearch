<?php
/* @var $this TaskController */
/* @var $model Task */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'task-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

            <?php echo $form->textFieldControlGroup($model,'title',array('span'=>5,'maxlength'=>200)); ?>

            <?php echo $form->textFieldControlGroup($model,'type',array('span'=>5,'maxlength'=>50)); ?>

            <?php echo $form->textFieldControlGroup($model,'description',array('span'=>5,'maxlength'=>300)); ?>

            <?php echo $form->textAreaControlGroup($model,'details',array('rows'=>6,'span'=>8)); ?>

            <?php //echo $form->textFieldControlGroup($model,'start_date',array('span'=>5)); ?>
            
            <?php echo TbHtml::label('Start Date', 'text'); ?>
            
            <?php 
				$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					// you must specifiy name or model/attribute
					'model' => $model,
					'attribute' => 'start_date',
					
					// optional: what's the initial value/date?
					'value' => $model->start_date,				
					
					// optional: jquery Datepicker options
					'options' => array(
						// how to change the input format?  see http://docs.jquery.com/UI/Datepicker/formatDate
						'dateFormat' => 'yy-mm-dd',
						
						// user will be able to change month and year
						'changeMonth' => 'true',
						'changeYear' => 'true',
						
						// shows the button panel under the calendar (bottons like "today" and "done")
						'showButtonPanel' => 'true',
						
						// this is useful to allow only the valid chars in the input field, according to dateFormat
						'constrainInput' => 'false',
						
						// speed at which the datepicker appears, time in ms or "slow", "normal" or "fast"
						'duration' => 'fast',
						
						// animation effect, see http://docs.jquery.com/UI/Effects
						'showAnim' => 'slide',
						),
					)
				);
			?>

            <?php echo $form->textFieldControlGroup($model,'due_date',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'complete_date',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'originator',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'owner',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'priority',array('span'=>5,'maxlength'=>50)); ?>

            <?php echo $form->textFieldControlGroup($model,'percent_complete',array('span'=>5)); ?>

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