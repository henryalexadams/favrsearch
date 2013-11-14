<?php
/* @var $this InstanceStatusController */
/* @var $model InstanceStatus */

$this->breadcrumbs=array(
	'Instance Statuses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List InstanceStatus', 'url'=>array('index')),
	array('label'=>'Create InstanceStatus', 'url'=>array('create')),
	array('label'=>'Update InstanceStatus', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete InstanceStatus', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InstanceStatus', 'url'=>array('admin')),
);
?>

<h1>View InstanceStatus #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'entry',
		'description',
	),
)); ?>
