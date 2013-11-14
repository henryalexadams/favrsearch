<?php
/* @var $this CommentStatusController */
/* @var $model CommentStatus */

$this->breadcrumbs=array(
	'Comment Statuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CommentStatus', 'url'=>array('index')),
	array('label'=>'Manage CommentStatus', 'url'=>array('admin')),
);
?>

<h1>Create CommentStatus</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>