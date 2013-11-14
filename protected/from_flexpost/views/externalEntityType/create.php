<?php
/* @var $this ExternalEntityTypeController */
/* @var $model ExternalEntityType */

$this->breadcrumbs=array(
	'External Entity Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ExternalEntityType', 'url'=>array('index')),
	array('label'=>'Manage ExternalEntityType', 'url'=>array('admin')),
);
?>

<h1>Create ExternalEntityType</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>