<?php
/* @var $this InstanceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Instances',
);

$this->menu=array(
	array('label'=>'Create Instance', 'url'=>array('create')),
	array('label'=>'Manage Instance', 'url'=>array('admin')),
);
?>

<h1>Instances</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
