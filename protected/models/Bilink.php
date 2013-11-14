<?php

/**
 * This is the model class for table "tbl_bilink".
 *
 * The followings are the available columns in table 'tbl_bilink':
 * @property integer $id
 * @property string $context
 * @property string $left_what
 * @property integer $left_id
 * @property integer $left_weight
 * @property string $right_what
 * @property integer $right_id
 * @property integer $right_weight
 * @property string $status
 * @property string $insert_datetime
 * @property integer $inserter
 * @property string $last_edit_datetime
 * @property integer $last_editor
 * @property string $insert_datetime_utc
 * @property string $last_edit_datetime_utc
 */
class Bilink extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Bilink the static model class
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
		return 'tbl_bilink';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('left_id, left_weight, right_id, right_weight, inserter, last_editor', 'numerical', 'integerOnly'=>true),
			array('context', 'length', 'max'=>100),
			array('left_what, right_what, status, insert_datetime_utc, last_edit_datetime_utc', 'length', 'max'=>50),
			array('insert_datetime, last_edit_datetime', 'safe'),
			
			
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
			array('id, context, left_what, left_id, left_weight, right_what, right_id, right_weight, status, insert_datetime, inserter, last_edit_datetime, last_editor, insert_datetime_utc, last_edit_datetime_utc', 'safe', 'on'=>'search'),
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
			'context' => 'Context',
			'left_what' => 'Left What',
			'left_id' => 'Left',
			'left_weight' => 'Left Weight',
			'right_what' => 'Right What',
			'right_id' => 'Right',
			'right_weight' => 'Right Weight',
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
		$criteria->compare('context',$this->context,true);
		$criteria->compare('left_what',$this->left_what,true);
		$criteria->compare('left_id',$this->left_id);
		$criteria->compare('left_weight',$this->left_weight);
		$criteria->compare('right_what',$this->right_what,true);
		$criteria->compare('right_id',$this->right_id);
		$criteria->compare('right_weight',$this->right_weight);
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