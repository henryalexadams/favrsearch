<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span-19">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="span-5 last">
	<div id="sidebar">
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operations',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
		
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Projects',
		));
			
			$criteria=new CDbCriteria;
			$criteria->order = 'insert_datetime ASC';
			
			$dataProvider=new CActiveDataProvider('Project', array(
				'criteria'=>$criteria,
				'pagination'=>array(
					'pageSize'=>9,
				),
			));
			
			$summaryText=Yii::t('zii','{start}-{end} of {count}');
			
			$widgetid = 'project_list_sidebar';
			
			$this->widget('zii.widgets.CListView', array(
				'dataProvider'=>$dataProvider,
				'id'=>$widgetid,
				'ajaxUpdate'=>true,
				'summaryText'=>$summaryText,
				'itemView'=>'//project/_sidebarview',  // partial view
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
	?>
	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>