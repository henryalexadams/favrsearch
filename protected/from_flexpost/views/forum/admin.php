<?php
/* @var $this ForumController */
/* @var $model Forum */

$this->breadcrumbs=array(
	'Forums'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Forum', 'url'=>array('index')),
	array('label'=>'Create Forum', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#forum-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Forums</h1>

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
	'id'=>'forum-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'title',
		'description',
		'weight',
		'views',
		/*
		'votes',
		'status',
		'insert_datetime',
		'inserter',
		'last_edit_datetime',
		'last_editor',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
