<?php
/* @var $this BilinkController */
/* @var $model Bilink */
?>

<?php
$this->breadcrumbs=array(
	'Bilinks'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Bilink', 'url'=>array('index')),
	array('label'=>'Create Bilink', 'url'=>array('create')),
	array('label'=>'Update Bilink', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Bilink', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Bilink', 'url'=>array('admin')),
);
?>

<h1>View Bilink #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'context',
		'left_what',
		'left_id',
		'left_weight',
		'right_what',
		'right_id',
		'right_weight',
		'status',
		'insert_datetime',
		'inserter',
		'last_edit_datetime',
		'last_editor',
		'insert_datetime_utc',
		'last_edit_datetime_utc',
	),
)); ?>