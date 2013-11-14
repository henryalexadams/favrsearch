<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'About',
);
?>
<h1>About</h1>

<p>This is the basic procedural flow of this app.</p>
<ul>
	<li>The Favr app submits a search form to its backend (in the Parse BaaS) which in turn performs a Restful API call to a url on this app.</li>
    <ul>
		<li>The call contains a JSON statement as a parameter.  It includes:</li>
        <ul>
		<li>username:UsersName</li>
		<li>password:UsersPassword</li>
		<li>terms:"one, or, more, words"</li>
		<li>category_search:true or false</li>
		<li>latitude:###.###</li>
		<li>longitude:###.###</li>
		<li>friend_favrs:array("of user's favrs and friends favrs")</li>
        </ul>
    </ul>
	<li>If category_search is true.</li>
    <ul>
    	<li>A Restful API call is made to the location_service API with JSON statement as a parameter, containing:
        <ul>
		<li>category_term:"oneword"</li>
		<li>latitude:###.###</li>
		<li>longitude:###.###</li>
        </ul>
        <li>A JSON statement containing a list of organizational locations is returned.</li>
        <li>This list of org_locations is in close proximity to the geo location provided and contain the single word search term in the category_labels field.</li>
    </ul>
	<li>Else if category_search is false.</li>
    <ul>
    	<li>A Restful API call is made to the location_service API with JSON statement as a parameter, containing:
        <ul>
            <li>latitude:###.###</li>
            <li>longitude:###.###</li>
        </ul>
        <li>A JSON statement containing a list of organizational locations is returned.</li>
        <li>This list of org_locations is in close proximity to the geo location provided, but has not been vetted for terms.</li>
        <li>The list of org_locations is examined line by line looking for any of the submitted search terms in either the org_name field or the category_labels field.</li>
        <li>Lines that do not any of the search words are removed from the list.</li>
        <li>Lines that do have one or more of the search words are weighted, based on how many occurances of each word are found.</li>
        <li>The number of lines in the list is now finalized.</li>
    </ul>
    <li>The locations list is now compared to the friends' favrs list.</li>
    <li>For each line in the locations list:</li>
    <ul>
    	<li>The friends favrs list is searched for favrs for the same org_location.</li>
        <li>The number of favrs found for that org_location is recorded in the location list.</li>
    </ul>
    <li>The final locations list is sorted by???</li>
    <ul>
    	<li>Friends favrs count.</li>
        <li>Search terms word count.</li>
        <li>Proximity. (How do we measure this?)</li>
        <li>Date favred?</li>
        <li>What priority should be assigned to each of these weights?</li>
    </ul>
</ul>

