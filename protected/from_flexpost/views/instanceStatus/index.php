<?php
/* @var $this InstanceStatusController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Instance Statuses',
);

$this->menu=array(
	array('label'=>'Create InstanceStatus', 'url'=>array('create')),
	array('label'=>'Manage InstanceStatus', 'url'=>array('admin')),
);
?>

<h1>Instance Statuses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
