<?php
/* @var $this ExternalEntityStatusController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'External Entity Statuses',
);

$this->menu=array(
	array('label'=>'Create ExternalEntityStatus', 'url'=>array('create')),
	array('label'=>'Manage ExternalEntityStatus', 'url'=>array('admin')),
);
?>

<h1>External Entity Statuses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
