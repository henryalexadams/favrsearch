<?php

class ApiController extends Controller
{
    // Members
    /**
     * Key which has to be in HTTP USERNAME and PASSWORD headers 
     */
    Const APPLICATION_ID = 'HCRAESRVAF';
 
    /**
     * Default response format
     * either 'json' or 'xml'
     */
    private $format = 'json';
    /**
     * @return array action filters
     */
    public function filters()
    {
            return array();
    }
 
    // Actions
    public function actionProximitylist($latitude, $longitude, $radius, $terms)
    {
        // begin location service search - proximity only - work terms in this function
        
        // clean terms array
        $terms = str_replace(',', ' ', $terms);
        $terms = str_replace('  ', ' ', $terms);
	
	$url = "http://ec2-54-204-2-189.compute-1.amazonaws.com/api/nearby";
	$params = array('latitude' => $latitude, 'longitude' => $longitude, 'radius' => $radius);
	// Update URL to container Query String of Paramaters 
	$url .= '?' . http_build_query($params);
	
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$json = curl_exec($curl);
	curl_close($curl);
		
	$return_array = json_decode($json);
		
	$location_service_rows = array();
	
        if ($return_array) {
            $location_service_rows = $return_array->message->rows;
        }
	
        // Did we get some results?
        if(empty($location_service_rows)) {
            // No
            $this->_sendResponse(200, 
                    sprintf('No items where found.') );
        } else {
            // Prepare response
            $rows = array();
            foreach($location_service_rows as $row) {
                $id = $row->id;
                $name = $row->name;
                $address = $row->address->address;
                $address_extended = $row->address->address_extended;
                $po_box = $row->address->po_box;
                $locality = $row->address->locality;
                $region = $row->address->region;
                $post_town = $row->address->post_town;
                $admin_region = $row->address->admin_region;
                $postcode = $row->address->postcode;
                $country = $row->address->country;
                $tel = $row->address->tel;
                $fax = $row->address->fax;
                $neighbourhood = $row->address->neighbourhood;
                $website = $row->website;
                $email = $row->email;
                $category_ids = $row->category_ids;
		$category_labels = $row->category_labels;
                $status = $row->status;
                $chain_name = $row->chain_name;
                $chain_id = $row->chain_id;
                $row_longitude = $row->longitude;
                $row_latitude = $row->latitude;
                $abslongitude = $row->abslongitude;
                $abslatitude = $row->abslatitude;
                $distance = $row->distance;
                
                $terms_array = explode(' ',$terms);
                $match_count = 0;
                foreach ($terms_array as $term) {
                    if(stripos($name, $term) !== false) {
                        $match_count = $match_count + 1;
                    }
                    if(stripos($category_labels, $term) !== false) {
                        $match_count = $match_count + 1;
                    }
                }
                
                $new_row = array(
                    'id' => $id,
                    'name' => $name,
                    'address' => $address,
                    'address_extended' => $address_extended,
                    'po_box' => $po_box,
                    'locality' => $locality,
                    'region' => $region,
                    'post_town' => $post_town,
                    'admin_region' => $admin_region,
                    'postcode' => $postcode,
                    'country' => $country,
                    'tel' => $tel,
                    'fax' => $fax,
                    'neighbourhood' => $neighbourhood,
                    'website' => $website,
                    'email' => $email,
                    'category_ids' => $category_ids,
                    'category_labels' => $category_labels,
                    'status' => $status,
                    'chain_name' => $chain_name,
                    'chain_id' => $chain_id,
                    'longitude' => $row_longitude,
                    'latitude' => $row_latitude,
                    'abslongitude' => $abslongitude,
                    'abslatitude' => $abslatitude,
                    'distance' => $distance,
                    'term_match_count' => $match_count
                );
                if ($match_count > 0) {
                    $rows[] = $new_row;
                }
            }
            // Send the response
            $this->_sendResponse(200, CJSON::encode($rows));
        }
    }
    
    public function actionProximitycatlist($latitude, $longitude, $radius, $kind)
    {
        // begin location service search - proximity and single category term
        
        // clean term
        //$term = str_replace(',', '', $term);
        //$term = str_replace('  ', '', $term);
        //$term = str_replace(' ', '', $term);
	
	$url = "http://ec2-54-204-2-189.compute-1.amazonaws.com/api/nearby";
	$params = array('latitude' => $latitude, 'longitude' => $longitude, 'radius' => $radius, 'kind' => $kind);
	// Update URL to container Query String of Paramaters 
	$url .= '?' . http_build_query($params);
	
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$json = curl_exec($curl);
	curl_close($curl);
		
	$return_array = json_decode($json);
		
        $location_service_rows = array();   
        
	if ($return_array) {
            $location_service_rows = $return_array->message->rows;
	}
		
        // Did we get some results?
        if(empty($location_service_rows)) {
            // No
            $this->_sendResponse(200, 
                    sprintf('No items where found.') );
        } else {
            // Prepare response
            $rows = array();
            foreach($location_service_rows as $row) {
                $id = $row->id;
                $name = $row->name;
                $address = $row->address->address;
                $address_extended = $row->address->address_extended;
                $po_box = $row->address->po_box;
                $locality = $row->address->locality;
                $region = $row->address->region;
                $post_town = $row->address->post_town;
                $admin_region = $row->address->admin_region;
                $postcode = $row->address->postcode;
                $country = $row->address->country;
                $tel = $row->address->tel;
                $fax = $row->address->fax;
                $neighbourhood = $row->address->neighbourhood;
                $website = $row->website;
                $email = $row->email;
                $category_ids = $row->category_ids;
		$category_labels = $row->category_labels;
                $status = $row->status;
                $chain_name = $row->chain_name;
                $chain_id = $row->chain_id;
                $row_longitude = $row->longitude;
                $row_latitude = $row->latitude;
                $abslongitude = $row->abslongitude;
                $abslatitude = $row->abslatitude;
                $distance = $row->distance;
                
                $match_count = 1;
                
                $new_row = array(
                    'id' => $id,
                    'name' => $name,
                    'address' => $address,
                    'address_extended' => $address_extended,
                    'po_box' => $po_box,
                    'locality' => $locality,
                    'region' => $region,
                    'post_town' => $post_town,
                    'admin_region' => $admin_region,
                    'postcode' => $postcode,
                    'country' => $country,
                    'tel' => $tel,
                    'fax' => $fax,
                    'neighbourhood' => $neighbourhood,
                    'website' => $website,
                    'email' => $email,
                    'category_ids' => $category_ids,
                    'category_labels' => $category_labels,
                    'status' => $status,
                    'chain_name' => $chain_name,
                    'chain_id' => $chain_id,
                    'longitude' => $row_longitude,
                    'latitude' => $row_latitude,
                    'abslongitude' => $abslongitude,
                    'abslatitude' => $abslatitude,
                    'distance' => $distance,
                    'term_match_count' => $match_count
                );
                
                $rows[] = $new_row;
                
            } // end foreach location service row
            
            // Send the response
            $this->_sendResponse(200, CJSON::encode($rows));
        }
    }
    public function actionView()
    {
    }
    public function actionCreate()
    {
    }
    public function actionUpdate()
    {
    }
    public function actionDelete()
    {
    }
    
    private function _sendResponse($status = 200, $body = '', $content_type = 'text/html')
    {
        // set the status
        $status_header = 'HTTP/1.1 ' . $status . ' ' . $this->_getStatusCodeMessage($status);
        header($status_header);
        // and the content type
        header('Content-type: ' . $content_type);
     
        // pages with body are easy
        if($body != '') {
            // send the body
            echo $body;
        }
        else { // we need to create the body if none is passed
            // create some body messages
            $message = '';
     
            // this is purely optional, but makes the pages a little nicer to read
            // for your users.  Since you won't likely send a lot of different status codes,
            // this also shouldn't be too ponderous to maintain
            switch($status)
            {
                case 401:
                    $message = 'You must be authorized to view this page.';
                    break;
                case 404:
                    $message = 'The requested URL ' . $_SERVER['REQUEST_URI'] . ' was not found.';
                    break;
                case 500:
                    $message = 'The server encountered an error processing your request.';
                    break;
                case 501:
                    $message = 'The requested method is not implemented.';
                    break;
            }
     
            // servers don't always have a signature turned on 
            // (this is an apache directive "ServerSignature On")
            $signature = ($_SERVER['SERVER_SIGNATURE'] == '') ? $_SERVER['SERVER_SOFTWARE'] . ' Server at ' . $_SERVER['SERVER_NAME'] . ' Port ' . $_SERVER['SERVER_PORT'] : $_SERVER['SERVER_SIGNATURE'];
     
            // this should be templated in a real-world solution
            $body = '
    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title>' . $status . ' ' . $this->_getStatusCodeMessage($status) . '</title>
    </head>
    <body>
        <h1>' . $this->_getStatusCodeMessage($status) . '</h1>
        <p>' . $message . '</p>
        <hr />
        <address>' . $signature . '</address>
    </body>
    </html>';
     
            echo $body;
        }
        Yii::app()->end();
    }
    
    private function _getStatusCodeMessage($status)
    {
        // these could be stored in a .ini file and loaded
        // via parse_ini_file()... however, this will suffice
        // for an example
        $codes = Array(
            200 => 'OK',
            400 => 'Bad Request',
            401 => 'Unauthorized',
            402 => 'Payment Required',
            403 => 'Forbidden',
            404 => 'Not Found',
            500 => 'Internal Server Error',
            501 => 'Not Implemented',
        );
        return (isset($codes[$status])) ? $codes[$status] : '';
    }
    
    private function _checkAuth()
    {
        // Check if we have the USERNAME and PASSWORD HTTP headers set?
        if(!(isset($_SERVER['HTTP_X_USERNAME']) and isset($_SERVER['HTTP_X_PASSWORD']))) {
            // Error: Unauthorized
            $this->_sendResponse(401);
        }
        $username = $_SERVER['HTTP_X_USERNAME'];
        $password = $_SERVER['HTTP_X_PASSWORD'];
        // Find the user
        $user=User::model()->find('LOWER(username)=?',array(strtolower($username)));
        if($user===null) {
            // Error: Unauthorized
            $this->_sendResponse(401, 'Error: User Name is invalid');
        } else if(!$user->validatePassword($password)) {
            // Error: Unauthorized
            $this->_sendResponse(401, 'Error: User Password is invalid');
        }
    }
    
}