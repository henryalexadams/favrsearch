<?php
/* @var $this TaskTypeController */
/* @var $model TaskType */
?>

<?php
$this->breadcrumbs=array(
	'Task Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TaskType', 'url'=>array('index')),
	array('label'=>'Manage TaskType', 'url'=>array('admin')),
);
?>

<h1>Create TaskType</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>