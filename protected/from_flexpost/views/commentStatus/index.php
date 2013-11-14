<?php
/* @var $this CommentStatusController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Comment Statuses',
);

$this->menu=array(
	array('label'=>'Create CommentStatus', 'url'=>array('create')),
	array('label'=>'Manage CommentStatus', 'url'=>array('admin')),
);
?>

<h1>Comment Statuses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
