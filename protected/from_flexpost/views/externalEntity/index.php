<?php
/* @var $this ExternalEntityController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'External Entities',
);

$this->menu=array(
	array('label'=>'Create ExternalEntity', 'url'=>array('create')),
	array('label'=>'Manage ExternalEntity', 'url'=>array('admin')),
);
?>

<h1>External Entities</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
