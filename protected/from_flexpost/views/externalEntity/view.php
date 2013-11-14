<?php
/* @var $this ExternalEntityController */
/* @var $model ExternalEntity */

$this->breadcrumbs=array(
	'External Entities'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ExternalEntity', 'url'=>array('index')),
	array('label'=>'Create ExternalEntity', 'url'=>array('create')),
	array('label'=>'Update ExternalEntity', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ExternalEntity', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ExternalEntity', 'url'=>array('admin')),
);
?>

<h1>View ExternalEntity #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'external_entity_type',
		'external_entity_key_name',
		'external_entity_id',
		'status',
		'insert_datetime',
		'inserter',
		'last_edit_datetime',
		'last_editor',
	),
)); ?>
