<?php
/* @var $this BilinkController */
/* @var $model Bilink */
?>

<?php
$this->breadcrumbs=array(
	'Bilinks'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Bilink', 'url'=>array('index')),
	array('label'=>'Create Bilink', 'url'=>array('create')),
	array('label'=>'View Bilink', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Bilink', 'url'=>array('admin')),
);
?>

    <h1>Update Bilink <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>