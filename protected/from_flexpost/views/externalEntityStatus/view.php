<?php
/* @var $this ExternalEntityStatusController */
/* @var $model ExternalEntityStatus */

$this->breadcrumbs=array(
	'External Entity Statuses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ExternalEntityStatus', 'url'=>array('index')),
	array('label'=>'Create ExternalEntityStatus', 'url'=>array('create')),
	array('label'=>'Update ExternalEntityStatus', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ExternalEntityStatus', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ExternalEntityStatus', 'url'=>array('admin')),
);
?>

<h1>View ExternalEntityStatus #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'entry',
		'description',
	),
)); ?>
