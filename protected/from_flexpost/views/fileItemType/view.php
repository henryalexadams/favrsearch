<?php
/* @var $this FileItemTypeController */
/* @var $model FileItemType */

$this->breadcrumbs=array(
	'File Item Types'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List FileItemType', 'url'=>array('index')),
	array('label'=>'Create FileItemType', 'url'=>array('create')),
	array('label'=>'Update FileItemType', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete FileItemType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FileItemType', 'url'=>array('admin')),
);
?>

<h1>View FileItemType #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'entry',
		'description',
	),
)); ?>
