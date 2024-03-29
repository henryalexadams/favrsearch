<?php
/* @var $this PostStatusController */
/* @var $model PostStatus */

$this->breadcrumbs=array(
	'Post Statuses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PostStatus', 'url'=>array('index')),
	array('label'=>'Create PostStatus', 'url'=>array('create')),
	array('label'=>'Update PostStatus', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PostStatus', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PostStatus', 'url'=>array('admin')),
);
?>

<h1>View PostStatus #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'entry',
		'description',
	),
)); ?>
