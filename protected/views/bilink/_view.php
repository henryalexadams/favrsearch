<?php
/* @var $this BilinkController */
/* @var $data Bilink */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('context')); ?>:</b>
	<?php echo CHtml::encode($data->context); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('left_what')); ?>:</b>
	<?php echo CHtml::encode($data->left_what); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('left_id')); ?>:</b>
	<?php echo CHtml::encode($data->left_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('left_weight')); ?>:</b>
	<?php echo CHtml::encode($data->left_weight); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('right_what')); ?>:</b>
	<?php echo CHtml::encode($data->right_what); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('right_id')); ?>:</b>
	<?php echo CHtml::encode($data->right_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('right_weight')); ?>:</b>
	<?php echo CHtml::encode($data->right_weight); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

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

	<b><?php echo CHtml::encode($data->getAttributeLabel('insert_datetime_utc')); ?>:</b>
	<?php echo CHtml::encode($data->insert_datetime_utc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_edit_datetime_utc')); ?>:</b>
	<?php echo CHtml::encode($data->last_edit_datetime_utc); ?>
	<br />

	*/ ?>

</div>