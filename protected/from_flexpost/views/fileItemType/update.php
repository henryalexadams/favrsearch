<?php
/* @var $this FileItemTypeController */
/* @var $model FileItemType */

$this->breadcrumbs=array(
	'File Item Types'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FileItemType', 'url'=>array('index')),
	array('label'=>'Create FileItemType', 'url'=>array('create')),
	array('label'=>'View FileItemType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FileItemType', 'url'=>array('admin')),
);
?>

<h1>Update FileItemType <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>