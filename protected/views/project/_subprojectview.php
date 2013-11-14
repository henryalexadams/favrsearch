<div class="view">
	
    <?php
	
		$note_icon=Yii::app()->getBaseUrl().'/images/googlePlus/color18/notepad.png';
		$broken_link_icon=Yii::app()->getBaseUrl().'/images/googlePlus/color18/broken_link.png';
		$disconnect_icon=Yii::app()->getBaseUrl().'/images/googlePlus/gray18/disconnect.png';
		$bilink_icon=Yii::app()->getBaseUrl().'/images/googlePlus//color18/arrow_bidirectional.png';
		$space=Yii::app()->getBaseUrl().'/images/googlePlus/color18/4pixelspace.png';
		
		$current_what=Yii::app()->session['current_what'];
		$current_id=Yii::app()->session['current_id'];
		
		$left_what=$data->left_what;
		$left_id=$data->left_id;
		$right_what=$data->right_what;
		$right_id=$data->right_id;
		
		$connection_what = '';
		$connection_id = 0;
		
		if ($current_what == $left_what) // && ($focus_item==$left_id))
		{
			if ($current_id == $left_id)
			{
				$connection_what = $right_what;
				$connection_id = $right_id;
			}
		}
		if ($current_what == $right_what)
		{
			if ($current_id == $right_id)
			{
				$connection_what = $left_what;
				$connection_id = $left_id;
			}
		}
		
		$connect_icon=Yii::app()->getBaseUrl().'/images/googlePlus/color18/connect.png';
		$connect_url=Yii::app()->createUrl('bilink/connect', array('what'=>$connection_what, 'id'=>$connection_id));
		
	?>

	
	<?php 
        switch ($connection_what) {
            case 'project':
                $src=$note_icon;
                $contentType='Project';
                break;
            default:
                $src=$broken_link_icon;
                break;
        }
    ?>
		
	<?php
        $criteria=new CDbCriteria;
        $criteria->condition = 'id=:id';
        $criteria->params = array(':id' => $connection_id);
        $name='';
        $description='';
        $where='';
        
        switch ($connection_what) {
            case 'project':
                $where='//project/view';
                $focus_item=Project::model()->find($criteria);
                if($current_id===null) {
                    // clear the variable
                    $name='unknown';
                    $description='';
                } else {
                    // update the found record with the right half information
                    $name  = $focus_item->name;
                    $description = $focus_item->description;
                }
                break;
            default:
                $where='site/index';
                $name='in progress';
                $description='';
                break;
        }
    ?>
        
	<?php if(!Yii::app()->user->isGuest) { ?>
        <div id='subviewMenuBar' class="subviewMenu">
			<?php
                $deleteUrl= $this->createUrl('/bilink/delete/', array('id'=>$data->id));
            ?>
            
            <?php if ($connection_what == '') { ?>
                <img alt=<?php echo 'in progress';?> src=<?php echo $src;?> align="left"/>
        	<?php } else { ?>
                <img alt=<?php echo $connection_what;?> src=<?php echo $src;?> align="left"/>
        	<?php } ?>
            
            <form id="bilinkdelete-form" method="post" action=<?php echo $deleteUrl; ?> >
                <input type="image" src="<?php echo $disconnect_icon; ?>" alt="Disconnect" align="right" valign="top"/>
            </form>
            
            <image src="<?php echo $space; ?>" align="right" valign="top"/>
            
            <?php
                $editUrl= $this->createUrl('/bilink/update/', array('id'=>$data->id));
            ?>
            
            <a href=<?php echo $editUrl;?> >
                <image src="<?php echo $bilink_icon; ?>" alt="Edit Connection" align="right" valign="top"/>
            </a>
            
            <hr />
                
        </div>        
        
    <?php
    }
    ?>
        
    <?php
	
		$clean_name=strip_tags($name);
        
        if ($connection_what == '') {
            echo CHtml::link(CHtml::encode($clean_name), array($where), array('align'=>'left'));
        } else {
            echo CHtml::link(CHtml::encode($clean_name), array($where, 'id'=>$connection_id), array('align'=>'left'));
        }
        
    ?>
    
    <?php
		echo '<br/>';
		echo CHtml::encode($focus_item->type);
	?>
    
    
    <?php
		if($focus_item->description != '') {
			echo '<br/>';
			echo '<br/>';
			echo '<i>'.CHtml::encode($focus_item->description).'</i>';
			echo '<br/>';
		}
		
	?>
    <br />
    <?php
		if ($focus_item->details != '') {
			$this->beginWidget('ext.coolfieldset.JCollapsibleFieldset', array(
					'collapsed'=>true,
					'onlyFieldset'=>false,
					'legend'=>'details',
					'legendHtmlOptions'=>array('title'=>'Click me with the mouse!')
				)); 
			
				echo $focus_item->details;
			
			$this->endWidget('ext.coolfieldset.JCollapsibleFieldset');
		}
	?>
    <?php /*
		if (($data->name != '') || ($data->description != '')) {
			echo '<br/>';
			
			$this->beginWidget('ext.coolfieldset.JCollapsibleFieldset', array(
					'collapsed'=>true,
					'onlyFieldset'=>false,
					'legend'=>'context',
					'legendHtmlOptions'=>array('title'=>'Click me with the mouse!')
				)); 
				
			if ($data->name != '') {
				echo CHtml::encode($data->name);
			}
			if ($data->description != '')
			{ 	
				?>
					<br />
					<i><?php echo CHtml::encode($data->description); ?></i>
				<?php 
			}
			
			$this->endWidget('ext.coolfieldset.JCollapsibleFieldset');
		}
		*/
	?>
	
</div>

