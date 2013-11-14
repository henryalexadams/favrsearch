<?php
	/* @var $this SiteController */
	/* @var $dataProvider CActiveDataProvider */
	
	$data_package = json_decode($json_package);
	$return_array = $data_package->return_array;
	$latitude = $data_package->latitude;
	$longitude = $data_package->longitude;
	$radius = $data_package->radius;
	$terms = $data_package->terms;
	$category_search = $data_package->category_search;
?>

<?php
	$this->breadcrumbs=array(
		'FavrSearch'=>array('favrsearch'),
		'Proximity Category List',
	);
	
	$this->menu=array(
		array('label'=>'FavrSearch', 'url'=>array('favrsearch')),
	);

?>

<div id="favrsearchMenuBar" class="favrsearchMenu">
	
    <?php
		$location_icon=Yii::app()->getBaseUrl().'/images/googlePlus/colorCustomSize/location-64-64.png';
		$space=Yii::app()->getBaseUrl().'/images/googlePlus/color18/4pixelspace.png';
	?>

	<img alt="Locations" src="<?php echo $location_icon; ?>" align="left"/>

    <br />	
    <hr />

</div>

<?php
	//// much of the original code has been moved to the SiteController/favrsearch action
	// make api call using curl
	
	// begin location service search via favrsearch api- proximity with one or more terms not identified as category specific
	
	echo 'latitude/longitude/radius --> '.$latitude.'/'.$longitude.' --- '.$radius;
	echo '<br/>';
	echo 'terms --> '.$terms;
	echo '<br/>';
	echo 'category_search --> '.$category_search;
	echo '<br/><br/>';
	
	if (!$return_array) {
		echo 'no matching locations were found';
	}
	
	echo '<br/>--------<br/>';
	
	if ($return_array) {
		foreach ($return_array as $row) {
			$name = $row->name;
			$address = $row->address;
			$locality = $row->locality;
			$region = $row->region;
			$postcode = $row->postcode;
			$category_labels = $row->category_labels;
			$latitude = $row->latitude;
			$longitude = $row->longitude;
			$distance = $row->distance;
			$term_match_count = $row->term_match_count;
			
			echo '<p>';
			echo $name;
			echo ' -- ';
			echo $address;
			echo ' -- ';
			echo $locality;
			echo ' -- ';
			echo $region;
			echo ' -- ';
			echo $postcode;
			echo ' -- ';
			echo $category_labels;
			echo ' -- ';
			echo $latitude;
			echo ' -- ';
			echo $longitude;
			echo ' -- ';
			echo $distance;
			echo ' -- ';
			echo $term_match_count;
			echo '</p>';
		}
	}
	
	echo '--------';
	
	// end location service search via favrsearch api- proximity with one or more terms not identified as category specific
	
?>