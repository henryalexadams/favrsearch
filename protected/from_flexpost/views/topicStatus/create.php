<?php
/* @var $this TopicStatusController */
/* @var $model TopicStatus */

$this->breadcrumbs=array(
	'Topic Statuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TopicStatus', 'url'=>array('index')),
	array('label'=>'Manage TopicStatus', 'url'=>array('admin')),
);
?>

<h1>Create TopicStatus</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>