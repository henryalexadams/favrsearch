<?php
/* @var $this PostController */
/* @var $data Post */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('forum_id')); ?>:</b>
	<?php echo CHtml::encode($data->forum_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('topic_id')); ?>:</b>
	<?php echo CHtml::encode($data->topic_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('external_entity_id')); ?>:</b>
	<?php echo CHtml::encode($data->external_entity_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('extra')); ?>:</b>
	<?php echo CHtml::encode($data->extra); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('views')); ?>:</b>
	<?php echo CHtml::encode($data->views); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('votes')); ?>:</b>
	<?php echo CHtml::encode($data->votes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anonymous')); ?>:</b>
	<?php echo CHtml::encode($data->anonymous); ?>
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

	*/ ?>

</div>