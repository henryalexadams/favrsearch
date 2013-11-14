<?php

/**
 * This is the model class for table "action_log".
 *
 * The followings are the available columns in table 'action_log':
 * @property integer $id
 * @property string $action
 * @property string $item_type
 * @property integer $item_id
 * @property integer $user_id
 * @property string $insert_datetime
 */
class ActionLog extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ActionLog the static model class
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
		return 'action_log';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('item_id, user_id', 'numerical', 'integerOnly'=>true),
			array('action, item_type', 'length', 'max'=>50),
			array('insert_datetime', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, action, item_type, item_id, user_id, insert_datetime', 'safe', 'on'=>'search'),
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
			'action' => 'Action',
			'item_type' => 'Item Type',
			'item_id' => 'Item',
			'user_id' => 'User',
			'insert_datetime' => 'Insert Datetime',
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
		$criteria->compare('action',$this->action,true);
		$criteria->compare('item_type',$this->item_type,true);
		$criteria->compare('item_id',$this->item_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('insert_datetime',$this->insert_datetime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}