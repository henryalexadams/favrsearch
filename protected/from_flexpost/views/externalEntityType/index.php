<?php
/* @var $this ExternalEntityTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'External Entity Types',
);

$this->menu=array(
	array('label'=>'Create ExternalEntityType', 'url'=>array('create')),
	array('label'=>'Manage ExternalEntityType', 'url'=>array('admin')),
);
?>

<h1>External Entity Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
