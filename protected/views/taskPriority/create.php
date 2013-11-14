<?php
/* @var $this TaskPriorityController */
/* @var $model TaskPriority */
?>

<?php
$this->breadcrumbs=array(
	'Task Priorities'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TaskPriority', 'url'=>array('index')),
	array('label'=>'Manage TaskPriority', 'url'=>array('admin')),
);
?>

<h1>Create TaskPriority</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>