<?php
/* @var $this ExternalEntityTypeController */
/* @var $model ExternalEntityType */

$this->breadcrumbs=array(
	'External Entity Types'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ExternalEntityType', 'url'=>array('index')),
	array('label'=>'Create ExternalEntityType', 'url'=>array('create')),
	array('label'=>'View ExternalEntityType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ExternalEntityType', 'url'=>array('admin')),
);
?>

<h1>Update ExternalEntityType <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>