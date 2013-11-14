<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}
	
	/**
	 * Displays the favr search page
	 */
	public function actionFavrsearch()
	{
		$model=new FavrsearchForm;
		
		//$this->render('favrsearch',array('model'=>$model));
		
		//break;
		
		// is this being called via a submit button?
		if(isset($_POST['FavrsearchForm']))
		{
			$model->attributes=$_POST['FavrsearchForm'];
			if($model->validate())
			{
				$latitude = $model->latitude;
				$longitude = $model->longitude;
				$radius = $model->radius;
				$terms = $model->terms;
				$category_search = $model->category_search;
				
				// now we want to use these values as parameters that we include with a call the internal api which in turn calls the mainstreets location service.
				// we want to determine whether the boolean category_search is true or false and route based on the value
				
				if ($category_search == 0) {
					//// call api/proximitylist
					$url = "http://localhost:8888/favrsearch/index.php/api/proximitylist";
					$params = array('latitude' => $latitude, 'longitude' => $longitude, 'radius' => $radius, 'terms' => $terms);
					
					// Update URL to container Query String of Paramaters 
					$url .= '?' . http_build_query($params);
					
					$curl = curl_init();
					curl_setopt($curl, CURLOPT_URL, $url);
					curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
					$json = curl_exec($curl);
					curl_close($curl);
					
					// this contains the rows returned from the api controller
					$return_array = json_decode($json);
					
					//// package the search parameters and the returned resultset for passing to the view
					$data_package = array(
						'latitude' => $latitude,
						'longitude' => $longitude,
						'radius' => $radius,
						'terms' => $terms,
						'category_search' => $category_search,
						'return_array' => $return_array
					);
					
					$json_package = json_encode($data_package);
					
					// load the view
					$this->render('proximitylist', array('json_package'=>$json_package));
					
				} else {
					//// call api/proximitycatlist
					$url = "http://localhost:8888/favrsearch/index.php/api/proximitycatlist";
					$params = array('latitude' => $latitude, 'longitude' => $longitude, 'radius' => $radius, 'kind' => $terms);
					
					// Update URL to container Query String of Paramaters 
					$url .= '?' . http_build_query($params);
					
					$curl = curl_init();
					curl_setopt($curl, CURLOPT_URL, $url);
					curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
					$json = curl_exec($curl);
					curl_close($curl);
					
					// this contains the rows returned from the api controller
					$return_array = json_decode($json);
					
					//// package the search parameters and the returned resultset for passing to the view
					$data_package = array(
						'latitude' => $latitude,
						'longitude' => $longitude,
						'radius' => $radius,
						'terms' => $terms,
						'category_search' => $category_search,
						'return_array' => $return_array
					);
					
					$json_package = json_encode($data_package);
					
					// load the view
					$this->render('proximitycatlist', array('json_package'=>$json_package));
				}
				
				//$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				//$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				//$headers="From: $name <{$model->email}>\r\n".
				//	"Reply-To: {$model->email}\r\n".
				//	"MIME-Version: 1.0\r\n".
				//	"Content-type: text/plain; charset=UTF-8";

				//mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				//Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				//$this->refresh();
				
			}
		} else { // this is not a submittal, just render the search page
			
			$this->render('favrsearch',array('model'=>$model));
			//$this->render('favrsearch');
		}
		
		
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}