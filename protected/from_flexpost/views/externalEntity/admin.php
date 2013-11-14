<?php
/* @var $this ExternalEntityController */
/* @var $model ExternalEntity */

$this->breadcrumbs=array(
	'External Entities'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ExternalEntity', 'url'=>array('index')),
	array('label'=>'Create ExternalEntity', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#external-entity-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage External Entities</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'external-entity-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'external_entity_type',
		'external_entity_key_name',
		'external_entity_id',
		'status',
		'insert_datetime',
		/*
		'inserter',
		'last_edit_datetime',
		'last_editor',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
