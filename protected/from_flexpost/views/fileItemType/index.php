<?php
/* @var $this FileItemTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'File Item Types',
);

$this->menu=array(
	array('label'=>'Create FileItemType', 'url'=>array('create')),
	array('label'=>'Manage FileItemType', 'url'=>array('admin')),
);
?>

<h1>File Item Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
