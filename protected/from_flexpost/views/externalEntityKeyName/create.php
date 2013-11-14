<?php
/* @var $this ExternalEntityKeyNameController */
/* @var $model ExternalEntityKeyName */

$this->breadcrumbs=array(
	'External Entity Key Names'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ExternalEntityKeyName', 'url'=>array('index')),
	array('label'=>'Manage ExternalEntityKeyName', 'url'=>array('admin')),
);
?>

<h1>Create ExternalEntityKeyName</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>