<?php
/* @var $this ExternalEntityController */
/* @var $model ExternalEntity */

$this->breadcrumbs=array(
	'External Entities'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ExternalEntity', 'url'=>array('index')),
	array('label'=>'Create ExternalEntity', 'url'=>array('create')),
	array('label'=>'View ExternalEntity', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ExternalEntity', 'url'=>array('admin')),
);
?>

<h1>Update ExternalEntity <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>