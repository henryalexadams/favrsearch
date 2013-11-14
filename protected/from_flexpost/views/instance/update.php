<?php
/* @var $this InstanceController */
/* @var $model Instance */

$this->breadcrumbs=array(
	'Instances'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Instance', 'url'=>array('index')),
	array('label'=>'Create Instance', 'url'=>array('create')),
	array('label'=>'View Instance', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Instance', 'url'=>array('admin')),
);
?>

<h1>Update Instance <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>