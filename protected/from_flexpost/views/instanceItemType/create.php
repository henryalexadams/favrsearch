<?php
/* @var $this InstanceItemTypeController */
/* @var $model InstanceItemType */

$this->breadcrumbs=array(
	'Instance Item Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List InstanceItemType', 'url'=>array('index')),
	array('label'=>'Manage InstanceItemType', 'url'=>array('admin')),
);
?>

<h1>Create InstanceItemType</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>