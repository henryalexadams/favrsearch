<?php
/* @var $this ProjectStatusController */
/* @var $model ProjectStatus */
?>

<?php
$this->breadcrumbs=array(
	'Project Statuses'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProjectStatus', 'url'=>array('index')),
	array('label'=>'Create ProjectStatus', 'url'=>array('create')),
	array('label'=>'View ProjectStatus', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ProjectStatus', 'url'=>array('admin')),
);
?>

    <h1>Update ProjectStatus <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>