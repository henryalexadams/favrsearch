<?php
/* @var $this ProjectController */
/* @var $model Project */
?>

<?php
$this->breadcrumbs=array(
	'Projects'=>array('index'),
	$model->name,
);

if(Yii::app()->user->isGuest) {
	$this->menu=array(
		array('label'=>'List Projects', 'url'=>array('index')),
		array('label'=>'Search Projects', 'url'=>array('admin')),
	);
} else {
	$this->menu=array(
		array('label'=>'List Projects', 'url'=>array('index')),
		array('label'=>'Add Project', 'url'=>array('create')),
		array('label'=>'Edit Project', 'url'=>array('update', 'id'=>$model->id)),
		array('label'=>'Delete Project', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
		array('label'=>'Search Projects', 'url'=>array('admin')),
	);
}
?>



<?php 
	// store this projects id in a sesssion variable for use when connecting
	Yii::app()->session['current_id'] = $model->id;	
	Yii::app()->session['current_what'] = 'project';

	$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Project',
		));
?>

    <div id="projectMenuBar" class="projectMenu">
            
        <?php
            $title=$model->name;
            $description=$model->description;
            $type = $model->type;
            $what='project';
            $id=$model->id;
            
            $project_icon=Yii::app()->getBaseUrl().'/images/googlePlus/colorCustomSize/notepad-48-48.png';
            $connect_url=Yii::app()->createUrl('bilink/connect', array('what'=>$what, 'id'=>$id));
            $connect_icon=Yii::app()->getBaseUrl().'/images/googlePlus/color18/connect.png';
            $space=Yii::app()->getBaseUrl().'/images/googlePlus/color18/4pixelspace.png';
            
            $fullview_url=Yii::app()->createUrl('/project/fullview', array('id'=>$id));
        ?>
    
        <img alt="Project" src="<?php echo $project_icon; ?>" style="float:left"/>
        <img src="<?php echo $space; ?>" style="float:right" />
        
        <?php /*if(!Yii::app()->user->isGuest) { ?>
            <a href=<?php echo $connect_url; ?> >
            <img src="<?php echo $connect_icon; ?>" alt="Connect" style="float:right" />
            </a>
            <img src="<?php echo $space; ?>" align="right" />
        <?php } */?>
        
        <br />
        <br />
    
    </div>
        
    <div id="project_name">
    
            <?php
                echo '<h1>'.$title.'</h1>';;
                echo '<br/>';
                if($type != '') {
                    echo '<i>'.$type.'</i>';
                    echo '<br/>';
                }
                if($description != '') {
                    echo $description;
                    echo '<br/>';
                }
            ?>
    </div>
    
    <?php $this->beginWidget('ext.coolfieldset.JCollapsibleFieldset', array(
                'collapsed'=>true,
                'legend'=>'Click to view project details',
                'legendHtmlOptions'=>array('title'=>'Click me with the mouse!')
            )); 
    ?>
    
    	<?php
			if($model->details != '') {
				echo $model->details;
				echo '<br/>';
			}
		?>
   		
    
    <?php $this->endWidget('ext.coolfieldset.JCollapsibleFieldset'); ?>

	<?php $this->beginWidget('ext.coolfieldset.JCollapsibleFieldset', array(
                'collapsed'=>true,
                'legend'=>'Click to view project info',
                'legendHtmlOptions'=>array('title'=>'Click me with the mouse!')
            )); 
        ?>
    
        <?php $this->widget('zii.widgets.CDetailView',array(
    		'htmlOptions' => array(
       		'class' => 'table table-striped table-condensed table-hover',
    		),
    		'data'=>$model,
    		'attributes'=>array(
				//'id',
				'name',
				'type',
				'description',
				'details',
				'start_date',
				'due_date',
				'complete_date',
				'originator',
				'owner',
				'status',
				'insert_datetime',
				'inserter',
				'last_edit_datetime',
				'last_editor',
				'insert_datetime_utc',
				'last_edit_datetime_utc',
			),
		)); ?>
    
    <?php $this->endWidget('ext.coolfieldset.JCollapsibleFieldset'); ?>
    
    <br />

<?php $this->endWidget(); // end single project record portlet ?>

<?php
	
	$what=Yii::app()->session['current_what'];
	$id=Yii::app()->session['current_id'];
	$criteria=new CDbCriteria;
	$criteria->condition = "(left_what=:what AND left_id=:id AND right_what='project') OR (right_what=:what AND right_id=:id AND left_what='project')";
	$criteria->params = array(':what' => $what, ':id' => $id);
	$criteria->order = 'left_weight ASC, right_weight ASC, insert_datetime ASC';
	//$criteria->order = 'weight ASC, insert_datetime DESC';
	
	$dataProvider=new CActiveDataProvider('Bilink', array(
		'criteria'=>$criteria,
		'pagination'=>array(
			'pageSize'=>9,
		),
	));
	
	if($dataProvider->totalItemCount > 0) {
			
		if($dataProvider->totalItemCount==1) {
			$widget_title = '&nbsp;'.$dataProvider->totalItemCount.' Connected Project';
		} else {
			$widget_title = '&nbsp;'.$dataProvider->totalItemCount.' Connected Projects';
		}
					
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>$widget_title,
		));
		
		
		$summaryText=Yii::t('zii','{start}-{end} of {count}');
		
		$this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'summaryText'=>$summaryText,
			'itemView'=>'//project/_subprojectview',  // partial view
			'pager'=>array(
				'class'=>'CLinkPager',
				'header'=>false,
				'firstPageLabel'=>'&lt;&lt;',
				'prevPageLabel'=>'&lt;',
				'nextPageLabel'=>'&gt;',	
				'lastPageLabel'=>'&gt;&gt;',
				'maxButtonCount'=>3,
			),
		));
		
		$this->endWidget();
	
	}
	
?>





