<?php
/* @var $this ExternalEntityStatusController */
/* @var $model ExternalEntityStatus */

$this->breadcrumbs=array(
	'External Entity Statuses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ExternalEntityStatus', 'url'=>array('index')),
	array('label'=>'Create ExternalEntityStatus', 'url'=>array('create')),
	array('label'=>'View ExternalEntityStatus', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ExternalEntityStatus', 'url'=>array('admin')),
);
?>

<h1>Update ExternalEntityStatus <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>