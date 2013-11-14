<?php
/* @var $this TopicTypeController */
/* @var $model TopicType */

$this->breadcrumbs=array(
	'Topic Types'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TopicType', 'url'=>array('index')),
	array('label'=>'Create TopicType', 'url'=>array('create')),
	array('label'=>'Update TopicType', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TopicType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TopicType', 'url'=>array('admin')),
);
?>

<h1>View TopicType #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'entry',
		'description',
	),
)); ?>
