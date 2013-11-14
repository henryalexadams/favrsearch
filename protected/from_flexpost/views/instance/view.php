<?php
/* @var $this InstanceController */
/* @var $model Instance */

$this->breadcrumbs=array(
	'Instances'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Instance', 'url'=>array('index')),
	array('label'=>'Create Instance', 'url'=>array('create')),
	array('label'=>'Update Instance', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Instance', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Instance', 'url'=>array('admin')),
);
?>

<h1>View Instance #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'item_type',
		'item_id',
		'config',
		'status',
		'insert_datetime',
		'inserter',
		'last_edit_datetime',
		'last_editor',
	),
)); ?>
