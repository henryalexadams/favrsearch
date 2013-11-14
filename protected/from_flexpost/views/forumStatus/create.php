<?php
/* @var $this ForumStatusController */
/* @var $model ForumStatus */

$this->breadcrumbs=array(
	'Forum Statuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ForumStatus', 'url'=>array('index')),
	array('label'=>'Manage ForumStatus', 'url'=>array('admin')),
);
?>

<h1>Create ForumStatus</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>