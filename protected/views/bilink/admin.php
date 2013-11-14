<?php
/* @var $this BilinkController */
/* @var $model Bilink */


$this->breadcrumbs=array(
	'Bilinks'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Bilink', 'url'=>array('index')),
	array('label'=>'Create Bilink', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#bilink-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Bilinks</h1>

<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
        &lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'bilink-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'context',
		'left_what',
		'left_id',
		'left_weight',
		'right_what',
		/*
		'right_id',
		'right_weight',
		'status',
		'insert_datetime',
		'inserter',
		'last_edit_datetime',
		'last_editor',
		'insert_datetime_utc',
		'last_edit_datetime_utc',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>