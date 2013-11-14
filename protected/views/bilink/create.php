<?php
/* @var $this BilinkController */
/* @var $model Bilink */
?>

<?php
$this->breadcrumbs=array(
	'Bilinks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Bilink', 'url'=>array('index')),
	array('label'=>'Manage Bilink', 'url'=>array('admin')),
);
?>

<h1>Create Bilink</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>