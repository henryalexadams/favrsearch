<?php
/* @var $this ExternalEntityTypeController */
/* @var $model ExternalEntityType */

$this->breadcrumbs=array(
	'External Entity Types'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ExternalEntityType', 'url'=>array('index')),
	array('label'=>'Create ExternalEntityType', 'url'=>array('create')),
	array('label'=>'Update ExternalEntityType', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ExternalEntityType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ExternalEntityType', 'url'=>array('admin')),
);
?>

<h1>View ExternalEntityType #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'entry',
		'description',
	),
)); ?>
