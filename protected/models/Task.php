<?php

/**
 * This is the model class for table "tbl_task".
 *
 * The followings are the available columns in table 'tbl_task':
 * @property integer $id
 * @property string $title
 * @property string $type
 * @property string $description
 * @property string $details
 * @property string $start_date
 * @property string $due_date
 * @property string $complete_date
 * @property integer $originator
 * @property integer $owner
 * @property string $priority
 * @property integer $percent_complete
 * @property string $status
 * @property string $insert_datetime
 * @property integer $inserter
 * @property string $last_edit_datetime
 * @property integer $last_editor
 * @property string $insert_datetime_utc
 * @property string $last_edit_datetime_utc
 */
class Task extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Task the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_task';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('originator, owner, percent_complete, inserter, last_editor', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>200),
			array('type, priority, status, insert_datetime_utc, last_edit_datetime_utc', 'length', 'max'=>50),
			array('description', 'length', 'max'=>300),
			array('details, start_date, due_date, complete_date, insert_datetime, last_edit_datetime', 'safe'),
			
			
			array('last_edit_datetime','default',
              'value'=>new CDbExpression('NOW()'),
              'setOnEmpty'=>false,'on'=>'update'),
        	array('insert_datetime,last_edit_datetime','default',
              'value'=>new CDbExpression('NOW()'),
              'setOnEmpty'=>false,'on'=>'insert'),
			
			
			array('last_edit_datetime_utc','default',
              'value'=>new CDbExpression('UTC_TIMESTAMP()'),
              'setOnEmpty'=>false,'on'=>'update'),
        	array('insert_datetime_utc,last_edit_datetime_utc','default',
              'value'=>new CDbExpression('UTC_TIMESTAMP()'),
              'setOnEmpty'=>false,'on'=>'insert'),
			  
			array('last_editor','default',
              'value'=>Yii::app()->user->id,
              'setOnEmpty'=>false,'on'=>'update'),
        	array('inserter,last_editor','default',
              'value'=>Yii::app()->user->id,
              'setOnEmpty'=>false,'on'=>'insert'),
			
			
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, type, description, details, start_date, due_date, complete_date, originator, owner, priority, percent_complete, status, insert_datetime, inserter, last_edit_datetime, last_editor, insert_datetime_utc, last_edit_datetime_utc', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Title',
			'type' => 'Type',
			'description' => 'Description',
			'details' => 'Details',
			'start_date' => 'Start Date',
			'due_date' => 'Due Date',
			'complete_date' => 'Complete Date',
			'originator' => 'Originator',
			'owner' => 'Owner',
			'priority' => 'Priority',
			'percent_complete' => 'Percent Complete',
			'status' => 'Status',
			'insert_datetime' => 'Insert Datetime',
			'inserter' => 'Inserter',
			'last_edit_datetime' => 'Last Edit Datetime',
			'last_editor' => 'Last Editor',
			'insert_datetime_utc' => 'Insert Datetime Utc',
			'last_edit_datetime_utc' => 'Last Edit Datetime Utc',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('details',$this->details,true);
		$criteria->compare('start_date',$this->start_date,true);
		$criteria->compare('due_date',$this->due_date,true);
		$criteria->compare('complete_date',$this->complete_date,true);
		$criteria->compare('originator',$this->originator);
		$criteria->compare('owner',$this->owner);
		$criteria->compare('priority',$this->priority,true);
		$criteria->compare('percent_complete',$this->percent_complete);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('insert_datetime',$this->insert_datetime,true);
		$criteria->compare('inserter',$this->inserter);
		$criteria->compare('last_edit_datetime',$this->last_edit_datetime,true);
		$criteria->compare('last_editor',$this->last_editor);
		$criteria->compare('insert_datetime_utc',$this->insert_datetime_utc,true);
		$criteria->compare('last_edit_datetime_utc',$this->last_edit_datetime_utc,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}