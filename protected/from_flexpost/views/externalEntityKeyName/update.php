<?php
/* @var $this ExternalEntityKeyNameController */
/* @var $model ExternalEntityKeyName */

$this->breadcrumbs=array(
	'External Entity Key Names'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ExternalEntityKeyName', 'url'=>array('index')),
	array('label'=>'Create ExternalEntityKeyName', 'url'=>array('create')),
	array('label'=>'View ExternalEntityKeyName', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ExternalEntityKeyName', 'url'=>array('admin')),
);
?>

<h1>Update ExternalEntityKeyName <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>