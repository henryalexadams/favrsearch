<?php
/* @var $this ProjectTypeController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Project Types',
);

$this->menu=array(
	array('label'=>'Create ProjectType','url'=>array('create')),
	array('label'=>'Manage ProjectType','url'=>array('admin')),
);
?>

<h1>Project Types</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>