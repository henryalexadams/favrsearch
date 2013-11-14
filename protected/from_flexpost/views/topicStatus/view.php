<?php
/* @var $this TopicStatusController */
/* @var $model TopicStatus */

$this->breadcrumbs=array(
	'Topic Statuses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TopicStatus', 'url'=>array('index')),
	array('label'=>'Create TopicStatus', 'url'=>array('create')),
	array('label'=>'Update TopicStatus', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TopicStatus', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TopicStatus', 'url'=>array('admin')),
);
?>

<h1>View TopicStatus #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'entry',
		'description',
	),
)); ?>
