<?php /* @var $this Controller */ ?>
<?php Yii::app()->bootstrap->register(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php //echo CHtml::encode(Yii::app()->name); ?>Favr Location Search App</div>
	</div><!-- header -->

	<div id="mainmenu">
        
        <?php echo TbHtml::pills(array(
    		array('label' => 'Home', 'url' => array('/site/index')),
   		 	array('label' => 'About', 'url' => array('/site/page', 'view'=>'about')),
			array('label' => 'Contact', 'url' => array('/site/contact')),
			array('label' => 'FavrSearch', 'url' => array('/site/favrsearch')),
    		array('label' => 'Project','items' => array(
        		array('label' => 'Projects', 'url' => array('/project/index'), 'active' => true),
				TbHtml::menuDivider(),
        		array('label' => 'Project Types', 'url' => array('/projectType/index'), 'active' => true),
    		)),
			/*
			// for later development
			array('label' => 'Task','items' => array(
        		array('label' => 'Tasks', 'url' => array('/task/index'), 'active' => true),
				TbHtml::menuDivider(),
        		array('label' => 'Task Types', 'url' => array('/taskType/index'), 'active' => true),
       			array('label' => 'Task Priorities', 'url' => array('/taskPriority/index'), 'active' => true),
    		)),
			array('label' => 'BiLink', 'url' => array('/bilink/index')),
			*/
			array('url'=>Yii::app()->getModule('user')->loginUrl, 'label'=>Yii::app()->getModule('user')->t("Login"), 'visible'=>Yii::app()->user->isGuest),
				array('url'=>Yii::app()->getModule('user')->registrationUrl, 'label'=>Yii::app()->getModule('user')->t("Register"), 'visible'=>Yii::app()->user->isGuest),
				array('url'=>Yii::app()->getModule('user')->profileUrl, 'label'=>Yii::app()->getModule('user')->t("Profile"), 'visible'=>!Yii::app()->user->isGuest),
				array('url'=>Yii::app()->getModule('user')->logoutUrl, 'label'=>Yii::app()->getModule('user')->t("Logout").' ('.Yii::app()->user->name.')', 'visible'=>!Yii::app()->user->isGuest),
		)); ?>
        
        
        
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Alex Adams for Mainstreets, Inc.<br/>
		All Rights Reserved by Mainstreets, Inc.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
