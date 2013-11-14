<?php
/* @var $this TopicTypeController */
/* @var $model TopicType */

$this->breadcrumbs=array(
	'Topic Types'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TopicType', 'url'=>array('index')),
	array('label'=>'Create TopicType', 'url'=>array('create')),
	array('label'=>'View TopicType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TopicType', 'url'=>array('admin')),
);
?>

<h1>Update TopicType <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>