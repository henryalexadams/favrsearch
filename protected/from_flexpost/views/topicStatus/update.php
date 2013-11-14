<?php
/* @var $this TopicStatusController */
/* @var $model TopicStatus */

$this->breadcrumbs=array(
	'Topic Statuses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TopicStatus', 'url'=>array('index')),
	array('label'=>'Create TopicStatus', 'url'=>array('create')),
	array('label'=>'View TopicStatus', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TopicStatus', 'url'=>array('admin')),
);
?>

<h1>Update TopicStatus <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>