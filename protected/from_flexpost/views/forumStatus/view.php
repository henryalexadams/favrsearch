<?php
/* @var $this ForumStatusController */
/* @var $model ForumStatus */

$this->breadcrumbs=array(
	'Forum Statuses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ForumStatus', 'url'=>array('index')),
	array('label'=>'Create ForumStatus', 'url'=>array('create')),
	array('label'=>'Update ForumStatus', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ForumStatus', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ForumStatus', 'url'=>array('admin')),
);
?>

<h1>View ForumStatus #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'entry',
		'description',
	),
)); ?>
