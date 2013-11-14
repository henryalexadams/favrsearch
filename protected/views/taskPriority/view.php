<?php
/* @var $this TaskPriorityController */
/* @var $model TaskPriority */
?>

<?php
$this->breadcrumbs=array(
	'Task Priorities'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List TaskPriority', 'url'=>array('index')),
	array('label'=>'Create TaskPriority', 'url'=>array('create')),
	array('label'=>'Update TaskPriority', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TaskPriority', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TaskPriority', 'url'=>array('admin')),
);
?>

<h1>View TaskPriority #<?php echo $model->id; ?></h1>

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