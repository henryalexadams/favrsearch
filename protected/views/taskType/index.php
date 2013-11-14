<?php
/* @var $this TaskTypeController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Task Types',
);

$this->menu=array(
	array('label'=>'Create TaskType','url'=>array('create')),
	array('label'=>'Manage TaskType','url'=>array('admin')),
);
?>

<h1>Task Types</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>