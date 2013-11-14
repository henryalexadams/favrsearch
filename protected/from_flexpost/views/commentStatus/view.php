<?php
/* @var $this CommentStatusController */
/* @var $model CommentStatus */

$this->breadcrumbs=array(
	'Comment Statuses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CommentStatus', 'url'=>array('index')),
	array('label'=>'Create CommentStatus', 'url'=>array('create')),
	array('label'=>'Update CommentStatus', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CommentStatus', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CommentStatus', 'url'=>array('admin')),
);
?>

<h1>View CommentStatus #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'entry',
		'description',
	),
)); ?>
