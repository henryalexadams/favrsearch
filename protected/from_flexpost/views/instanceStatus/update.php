<?php
/* @var $this InstanceStatusController */
/* @var $model InstanceStatus */

$this->breadcrumbs=array(
	'Instance Statuses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List InstanceStatus', 'url'=>array('index')),
	array('label'=>'Create InstanceStatus', 'url'=>array('create')),
	array('label'=>'View InstanceStatus', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage InstanceStatus', 'url'=>array('admin')),
);
?>

<h1>Update InstanceStatus <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>