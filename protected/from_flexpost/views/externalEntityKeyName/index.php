<?php
/* @var $this ExternalEntityKeyNameController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'External Entity Key Names',
);

$this->menu=array(
	array('label'=>'Create ExternalEntityKeyName', 'url'=>array('create')),
	array('label'=>'Manage ExternalEntityKeyName', 'url'=>array('admin')),
);
?>

<h1>External Entity Key Names</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
