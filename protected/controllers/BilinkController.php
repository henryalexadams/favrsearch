<?php

class BilinkController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view', 'admin'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('admin','create','update', 'connect', 'delete'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Bilink;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['Bilink'])) {
			$model->attributes=$_POST['Bilink'];
			if ($model->save()) {
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['Bilink'])) {
			$model->attributes=$_POST['Bilink'];
			if ($model->save()) {
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if (Yii::app()->request->isPostRequest) {
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if (!isset($_GET['ajax'])) {
				//$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
				$current_id = Yii::app()->session['current_id'];
				$return_url=Yii::app()->createUrl('project/view', array('id'=>$current_id));
				$this->redirect($return_url);
			} else {
				$current_id = Yii::app()->session['current_id'];
				$return_url=Yii::app()->createUrl('project/view', array('id'=>$current_id));
				$this->redirect($return_url);
			}
			
			
		} else {
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
		}
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Bilink');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Bilink('search');
		$model->unsetAttributes();  // clear any default values
		if (isset($_GET['Bilink'])) {
			$model->attributes=$_GET['Bilink'];
		}

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Bilink the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Bilink::model()->findByPk($id);
		if ($model===null) {
			throw new CHttpException(404,'The requested page does not exist.');
		}
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Bilink $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if (isset($_POST['ajax']) && $_POST['ajax']==='bilink-form') {
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	/**
	 * Inserts one connection record.
	 * Left side is what is in the current_what and current_id session variables
	 * The right side is what is passed to the function from the clicked connect icon
	 * Redirect to returnUrl
	 */
	public function actionConnect($what,$id)
	{
		$user_id=Yii::app()->user->id;
		$context = 'Click Connect';
		$left_what = Yii::app()->session['current_what'];
		$left_id = Yii::app()->session['current_id'];
		$left_weight = 1;
		$right_what = $what;
		$right_id = $id;
		$right_weight = 1;
		$status = 'Active';
		
		// start a new bilink record
		$bilink = new Bilink;
		//$bilink->user_id=Yii::app()->user->id;
		$bilink->context = $context;
		$bilink->left_what = $left_what;
		$bilink->left_id = $left_id;
		$bilink->left_weight = $left_weight;
		$bilink->right_what = $right_what;
		$bilink->right_id = $right_id;
		$bilink->right_weight = $right_weight;
		$bilink->status = $status;
		$bilink->save();
		
		//$this->redirect(Yii::app()->user->returnURL);
		$return_url=Yii::app()->createUrl('project/view', array('id'=>$left_id));
		$this->redirect($return_url);
	}
}