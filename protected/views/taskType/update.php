<?php
/* @var $this TaskTypeController */
/* @var $model TaskType */
?>

<?php
$this->breadcrumbs=array(
	'Task Types'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TaskType', 'url'=>array('index')),
	array('label'=>'Create TaskType', 'url'=>array('create')),
	array('label'=>'View TaskType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TaskType', 'url'=>array('admin')),
);
?>

    <h1>Update TaskType <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>