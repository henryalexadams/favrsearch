<?php
/* @var $this FileController */
/* @var $data File */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_type')); ?>:</b>
	<?php echo CHtml::encode($data->item_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_id')); ?>:</b>
	<?php echo CHtml::encode($data->item_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filename')); ?>:</b>
	<?php echo CHtml::encode($data->filename); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('label')); ?>:</b>
	<?php echo CHtml::encode($data->label); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('insert_datetime')); ?>:</b>
	<?php echo CHtml::encode($data->insert_datetime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inserter')); ?>:</b>
	<?php echo CHtml::encode($data->inserter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_edit_datetime')); ?>:</b>
	<?php echo CHtml::encode($data->last_edit_datetime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_editor')); ?>:</b>
	<?php echo CHtml::encode($data->last_editor); ?>
	<br />

	*/ ?>

</div>