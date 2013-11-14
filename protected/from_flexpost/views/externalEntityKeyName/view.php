<?php
/* @var $this ExternalEntityKeyNameController */
/* @var $model ExternalEntityKeyName */

$this->breadcrumbs=array(
	'External Entity Key Names'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ExternalEntityKeyName', 'url'=>array('index')),
	array('label'=>'Create ExternalEntityKeyName', 'url'=>array('create')),
	array('label'=>'Update ExternalEntityKeyName', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ExternalEntityKeyName', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ExternalEntityKeyName', 'url'=>array('admin')),
);
?>

<h1>View ExternalEntityKeyName #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'entry',
		'description',
	),
)); ?>
