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

<?php
	/*
	$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Projects',
		));
	*/
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
	/*
$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
));
*/
?>

<?php //$this->endWidget(); ?>

<?php
	//// much of the following code has been moved to the SiteController/favrsearch action
	// make api call using curl
	
	
	// begin location service search via favrsearch api- proximity with one or more terms not identified as category specific
	
	//$latitude = 36.990323;
	//$longitude = -121.982143;
	//$radius = 0.1;
	//$terms = 'Dentists';
	//$kind = $terms;
		
	/*
	$url = "http://localhost:8888/favrsearch/index.php/api/proximitylist";
	$params = array('latitude' => $latitude, 'longitude' => $longitude, 'radius' => $radius, 'terms' => $terms);
	
	//$url = "http://localhost:8888/favrsearch/index.php/api/proximitycatlist";
	//$params = array('latitude' => $latitude, 'longitude' => $longitude, 'radius' => $radius, 'kind' => $kind);
	
	// Update URL to container Query String of Paramaters 
	$url .= '?' . http_build_query($params);
	*/
	
	echo 'latitude/longitude/radius --> '.$latitude.'/'.$longitude.' --- '.$radius;
	echo '<br/>';
	echo 'terms --> '.$terms;
	echo '<br/>';
	echo 'category_search --> '.$category_search;
	echo '<br/><br/>';
	
	/* // moved to SiteController/favrsearch
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$json = curl_exec($curl);
	curl_close($curl);
	*/
	
	//echo $json;
	
	//$return_array = json_decode($json);
	
	
	
	//echo '<br/><br/>end echo json<br/><br/>';
	
	if (!$return_array) {
		echo 'return array is empty';
	}
	
	//print_r($return_array);
	
	//echo '<br/><br/>end echo return_array<br/><br/>';
	
	//$terms = str_replace(',', ' ', $terms);
        //$terms = str_replace('  ', ' ', $terms);
	
	// demonstrate that the result of cleaning terms
	//echo '<br/>cleaned terms<br/>'.$terms.'<br/><br/>';
	
	echo '<br/>--------<br/>';
	
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
	
	echo '--------';
	
	
	// end location service search via favrsearch api- proximity with one or more terms not identified as category specific
	
	
	
	/*
	// begin just the all search - internal model
	$url = "http://localhost:8888/favrsearch/index.php/api/proximitylist";
	
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	//curl_setopt($curl, CURLOPT_GET, true);  // get is assumed
	$json = curl_exec($curl);
	curl_close($curl);
	
	//echo $json;
	
	$return_array = json_decode($json);
	
	echo '<br/><br/><br/>';
	
	//print_r($return_array);
	if ($return_array) {
		foreach ($return_array as $row) {
			
			$name = $row->name;
			$description = $row->description;
			$details = $row->details;
			$term = 'the';

			if((stripos($name, $term) !== false) or (stripos($description, $term) !== false) or (stripos($details, $term) !== false)) {
			//if((stripos($description, $terms_string) !== false)) {
				echo '<p>';
				echo $row->name;
				echo ' -- ';
				echo $row->type;
				echo '<p>';
			}
		}
	}
	// end just the all search
	*/
	
	
	// begin all with one term search - internal model
	/*
	//$term = $data->term;
	
	echo $term;
	
	
	$url = "http://localhost:8888/favrsearch/index.php/api/proximitycatlist";
	$params = array('term' => $term);
	// Update URL to container Query String of Paramaters 
	$url .= '?' . http_build_query($params);
	
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	//curl_setopt($curl, CURLOPT_GET, true);  // get is assumed
	$json = curl_exec($curl);
	curl_close($curl);
	
	//echo $json;
	
	$return_array = json_decode($json);
	
	echo '<br/><br/><br/>';
	
	//print_r($return_array);
	if ($return_array) {
		foreach ($return_array as $row) {
			echo '<p>';
			echo $row->name;
			echo ' -- ';
			echo $row->type;
			echo '<p>';
		}
	}
	// end all with one term search
	*/
?>




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