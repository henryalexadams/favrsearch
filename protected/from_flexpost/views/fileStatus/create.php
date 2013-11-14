<?php
/* @var $this FileStatusController */
/* @var $model FileStatus */

$this->breadcrumbs=array(
	'File Statuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FileStatus', 'url'=>array('index')),
	array('label'=>'Manage FileStatus', 'url'=>array('admin')),
);
?>

<h1>Create FileStatus</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>