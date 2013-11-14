<?php
/* @var $this InstanceController */
/* @var $data Instance */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_type')); ?>:</b>
	<?php echo CHtml::encode($data->item_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_id')); ?>:</b>
	<?php echo CHtml::encode($data->item_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('config')); ?>:</b>
	<?php echo CHtml::encode($data->config); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('insert_datetime')); ?>:</b>
	<?php echo CHtml::encode($data->insert_datetime); ?>
	<br />

	<?php /*
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