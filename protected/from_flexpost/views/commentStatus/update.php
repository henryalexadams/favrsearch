<?php
/* @var $this CommentStatusController */
/* @var $model CommentStatus */

$this->breadcrumbs=array(
	'Comment Statuses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CommentStatus', 'url'=>array('index')),
	array('label'=>'Create CommentStatus', 'url'=>array('create')),
	array('label'=>'View CommentStatus', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CommentStatus', 'url'=>array('admin')),
);
?>

<h1>Update CommentStatus <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>