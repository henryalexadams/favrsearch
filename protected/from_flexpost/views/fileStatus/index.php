<?php
/* @var $this FileStatusController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'File Statuses',
);

$this->menu=array(
	array('label'=>'Create FileStatus', 'url'=>array('create')),
	array('label'=>'Manage FileStatus', 'url'=>array('admin')),
);
?>

<h1>File Statuses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
