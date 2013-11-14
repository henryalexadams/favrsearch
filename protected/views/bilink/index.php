<?php
/* @var $this BilinkController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Bilinks',
);

$this->menu=array(
	array('label'=>'Create Bilink','url'=>array('create')),
	array('label'=>'Manage Bilink','url'=>array('admin')),
);
?>

<h1>Bilinks</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>