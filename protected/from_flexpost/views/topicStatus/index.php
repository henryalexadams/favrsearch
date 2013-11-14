<?php
/* @var $this TopicStatusController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Topic Statuses',
);

$this->menu=array(
	array('label'=>'Create TopicStatus', 'url'=>array('create')),
	array('label'=>'Manage TopicStatus', 'url'=>array('admin')),
);
?>

<h1>Topic Statuses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
