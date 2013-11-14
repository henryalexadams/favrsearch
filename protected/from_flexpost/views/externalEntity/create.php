<?php
/* @var $this ExternalEntityController */
/* @var $model ExternalEntity */

$this->breadcrumbs=array(
	'External Entities'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ExternalEntity', 'url'=>array('index')),
	array('label'=>'Manage ExternalEntity', 'url'=>array('admin')),
);
?>

<h1>Create ExternalEntity</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>