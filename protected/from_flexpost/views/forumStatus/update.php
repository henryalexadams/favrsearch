<?php
/* @var $this ForumStatusController */
/* @var $model ForumStatus */

$this->breadcrumbs=array(
	'Forum Statuses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ForumStatus', 'url'=>array('index')),
	array('label'=>'Create ForumStatus', 'url'=>array('create')),
	array('label'=>'View ForumStatus', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ForumStatus', 'url'=>array('admin')),
);
?>

<h1>Update ForumStatus <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>