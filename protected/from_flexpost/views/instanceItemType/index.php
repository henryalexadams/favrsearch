<?php
/* @var $this InstanceItemTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Instance Item Types',
);

$this->menu=array(
	array('label'=>'Create InstanceItemType', 'url'=>array('create')),
	array('label'=>'Manage InstanceItemType', 'url'=>array('admin')),
);
?>

<h1>Instance Item Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
