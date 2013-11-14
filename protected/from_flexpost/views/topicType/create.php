<?php
/* @var $this TopicTypeController */
/* @var $model TopicType */

$this->breadcrumbs=array(
	'Topic Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TopicType', 'url'=>array('index')),
	array('label'=>'Manage TopicType', 'url'=>array('admin')),
);
?>

<h1>Create TopicType</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>