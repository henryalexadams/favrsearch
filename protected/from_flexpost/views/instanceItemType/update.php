<?php
/* @var $this InstanceItemTypeController */
/* @var $model InstanceItemType */

$this->breadcrumbs=array(
	'Instance Item Types'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List InstanceItemType', 'url'=>array('index')),
	array('label'=>'Create InstanceItemType', 'url'=>array('create')),
	array('label'=>'View InstanceItemType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage InstanceItemType', 'url'=>array('admin')),
);
?>

<h1>Update InstanceItemType <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>