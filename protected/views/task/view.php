<?php
/* @var $this TaskController */
/* @var $model Task */
?>

<?php
$this->breadcrumbs=array(
	'Tasks'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Task', 'url'=>array('index')),
	array('label'=>'Create Task', 'url'=>array('create')),
	array('label'=>'Update Task', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Task', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Task', 'url'=>array('admin')),
);
?>

<h1>View Task #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'title',
		'type',
		'description',
		'details',
		'start_date',
		'due_date',
		'complete_date',
		'originator',
		'owner',
		'priority',
		'percent_complete',
		'status',
		'insert_datetime',
		'inserter',
		'last_edit_datetime',
		'last_editor',
		'insert_datetime_utc',
		'last_edit_datetime_utc',
	),
)); ?>