<?php
/* @var $this TaskPriorityController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Task Priorities',
);

$this->menu=array(
	array('label'=>'Create TaskPriority','url'=>array('create')),
	array('label'=>'Manage TaskPriority','url'=>array('admin')),
);
?>

<h1>Task Priorities</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>