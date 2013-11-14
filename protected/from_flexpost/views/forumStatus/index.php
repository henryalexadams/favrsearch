<?php
/* @var $this ForumStatusController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Forum Statuses',
);

$this->menu=array(
	array('label'=>'Create ForumStatus', 'url'=>array('create')),
	array('label'=>'Manage ForumStatus', 'url'=>array('admin')),
);
?>

<h1>Forum Statuses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
