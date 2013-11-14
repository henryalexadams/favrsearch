<?php
/* @var $this ProjectStatusController */
/* @var $model ProjectStatus */
?>

<?php
$this->breadcrumbs=array(
	'Project Statuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProjectStatus', 'url'=>array('index')),
	array('label'=>'Manage ProjectStatus', 'url'=>array('admin')),
);
?>

<h1>Create ProjectStatus</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>