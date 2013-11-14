<?php
/* @var $this ProjectController */
/* @var $data Project */
?>

<div class="view">

	<div id="projectMenuBar" class="projectMenu">

    
        <b><?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id'=>$data->id)); ?></b>
        
        <?php
            $title=$data->name;
            $description=$data->description;
			$type=$data->type;
            $what='project';
            $id=$data->id;
            $connect_url=Yii::app()->createUrl('bilink/connect', array('what'=>$what, 'id'=>$id));
            $connect_icon=Yii::app()->getBaseUrl().'/images/googlePlus/color18/connect.png';
            $space=Yii::app()->getBaseUrl().'/images/googlePlus/color18/4pixelspace.png';
        ?>
        
        <?php 
		/*
			if(!Yii::app()->user->isGuest) { ?>
            <a href=<?php echo $connect_url; ?> >
            <image src="<?php echo $connect_icon; ?>" alt="Connect" style="float:right" />
            </a>
            <image src="<?php echo $space; ?>" align="right" />
        <?php } */?>
        
        <hr />	
    
    </div>

	<i><?php echo CHtml::encode($data->type); ?></i>
	<br />

	<?php echo CHtml::encode($data->description); ?>
	<br />

</div>