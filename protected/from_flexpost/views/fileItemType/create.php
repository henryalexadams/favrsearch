<?php
/* @var $this FileItemTypeController */
/* @var $model FileItemType */

$this->breadcrumbs=array(
	'File Item Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FileItemType', 'url'=>array('index')),
	array('label'=>'Manage FileItemType', 'url'=>array('admin')),
);
?>

<h1>Create FileItemType</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>