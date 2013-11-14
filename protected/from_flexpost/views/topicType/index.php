<?php
/* @var $this TopicTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Topic Types',
);

$this->menu=array(
	array('label'=>'Create TopicType', 'url'=>array('create')),
	array('label'=>'Manage TopicType', 'url'=>array('admin')),
);
?>

<h1>Topic Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
