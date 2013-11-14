<?php
/* @var $this InstanceItemTypeController */
/* @var $model InstanceItemType */

$this->breadcrumbs=array(
	'Instance Item Types'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List InstanceItemType', 'url'=>array('index')),
	array('label'=>'Create InstanceItemType', 'url'=>array('create')),
	array('label'=>'Update InstanceItemType', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete InstanceItemType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InstanceItemType', 'url'=>array('admin')),
);
?>

<h1>View InstanceItemType #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'entry',
		'description',
	),
)); ?>
