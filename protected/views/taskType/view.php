<?php
/* @var $this TaskTypeController */
/* @var $model TaskType */
?>

<?php
$this->breadcrumbs=array(
	'Task Types'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List TaskType', 'url'=>array('index')),
	array('label'=>'Create TaskType', 'url'=>array('create')),
	array('label'=>'Update TaskType', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TaskType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TaskType', 'url'=>array('admin')),
);
?>

<h1>View TaskType #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'name',
		'description',
	),
)); ?>