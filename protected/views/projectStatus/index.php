<?php
/* @var $this ProjectStatusController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Project Statuses',
);

$this->menu=array(
	array('label'=>'Create ProjectStatus','url'=>array('create')),
	array('label'=>'Manage ProjectStatus','url'=>array('admin')),
);
?>

<h1>Project Statuses</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>