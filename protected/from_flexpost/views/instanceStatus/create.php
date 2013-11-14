<?php
/* @var $this InstanceStatusController */
/* @var $model InstanceStatus */

$this->breadcrumbs=array(
	'Instance Statuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List InstanceStatus', 'url'=>array('index')),
	array('label'=>'Manage InstanceStatus', 'url'=>array('admin')),
);
?>

<h1>Create InstanceStatus</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>