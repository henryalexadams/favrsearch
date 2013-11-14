<?php
/* @var $this ProjectController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Projects...',
);

if(Yii::app()->user->isGuest) {
	$this->menu=array(
		array('label'=>'Search Projects', 'url'=>array('admin')),
	);
} else {
	$this->menu=array(
		array('label'=>'Add Project', 'url'=>array('create')),
		array('label'=>'Search Projects', 'url'=>array('admin')),
	);
}

// crud default
/*
$this->menu=array(
	array('label'=>'Create Project','url'=>array('create')),
	array('label'=>'Manage Project','url'=>array('admin')),
);
*/
?>

<?php 
	$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Projects',
		));
?>

<div id="projectMenuBar" class="projectMenu">
	
    <?php
		$note_icon=Yii::app()->getBaseUrl().'/images/googlePlus/colorCustomSize/notepad-64-64.png';
		$space=Yii::app()->getBaseUrl().'/images/googlePlus/color18/4pixelspace.png';
	?>

	<img alt="Projects" src="<?php echo $note_icon; ?>" align="left"/>

    <br />	
    <hr />

</div>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php $this->endWidget(); ?>




<?php 
	// crud default
	
	/* 
	echo '<h1>Projects</h1>';
	
	$this->widget('bootstrap.widgets.TbListView',array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
	));
	*/
?>