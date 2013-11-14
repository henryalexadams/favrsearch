<?php
/* @var $this TaskPriorityController */
/* @var $model TaskPriority */
?>

<?php
$this->breadcrumbs=array(
	'Task Priorities'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TaskPriority', 'url'=>array('index')),
	array('label'=>'Create TaskPriority', 'url'=>array('create')),
	array('label'=>'View TaskPriority', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TaskPriority', 'url'=>array('admin')),
);
?>

    <h1>Update TaskPriority <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>