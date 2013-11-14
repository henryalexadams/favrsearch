<?php
/* @var $this ExternalEntityStatusController */
/* @var $model ExternalEntityStatus */

$this->breadcrumbs=array(
	'External Entity Statuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ExternalEntityStatus', 'url'=>array('index')),
	array('label'=>'Manage ExternalEntityStatus', 'url'=>array('admin')),
);
?>

<h1>Create ExternalEntityStatus</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>