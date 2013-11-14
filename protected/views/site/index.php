<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to the <i><?php echo CHtml::encode(Yii::app()->name); ?></i>&nbsp;app.</h1>

<p>This app primarily provides location search functionality to Favr mobile apps.</p>

<p>This app is one of four entities in the Version 1 release of Favr:</p>
<ul>
	<li>The Favr mobile app itself, initially a native development only on the iPhone.</li>
	<li>The Favr backend that initially resides in the Parse BaaS.</li>
	<li>The Favr location services app providing an API for extracting data from the Favr location database.  Initially, the API is developed using Scala/spray.io and running on the Amazon cloud.</li>
	<li>This search app is built in the Yii Framework, and provides Restful API services to the Favr mobile app and its backend.  It also calls on the Restful API of the location services app and the Favr backend.</li>
</ul>
<p>Notes about this development.</p>
<ul>
	<li>The only relevant local databases are used for authentication.  Even though this is an MVC patterned development, most database access is via Restful API calls.</li>
	<li>This is a pure MVC site.</li>
	<li>All Yii conventions have been followed.</li>
	<li>Full authentication has been included in the site.</li>
</ul>
