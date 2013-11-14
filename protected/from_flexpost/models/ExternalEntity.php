<?php

/**
 * This is the model class for table "external_entity".
 *
 * The followings are the available columns in table 'external_entity':
 * @property integer $id
 * @property string $external_entity_type
 * @property string $external_entity_key_name
 * @property string $external_entity_id
 * @property string $status
 * @property string $insert_datetime
 * @property integer $inserter
 * @property string $last_edit_datetime
 * @property integer $last_editor
 */
class ExternalEntity extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ExternalEntity the static model class
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
		return 'external_entity';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('inserter, last_editor', 'numerical', 'integerOnly'=>true),
			array('external_entity_type, external_entity_key_name, external_entity_id, status', 'length', 'max'=>50),
			array('insert_datetime, last_edit_datetime', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, external_entity_type, external_entity_key_name, external_entity_id, status, insert_datetime, inserter, last_edit_datetime, last_editor', 'safe', 'on'=>'search'),
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
			'external_entity_type' => 'External Entity Type',
			'external_entity_key_name' => 'External Entity Key Name',
			'external_entity_id' => 'External Entity',
			'status' => 'Status',
			'insert_datetime' => 'Insert Datetime',
			'inserter' => 'Inserter',
			'last_edit_datetime' => 'Last Edit Datetime',
			'last_editor' => 'Last Editor',
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
		$criteria->compare('external_entity_type',$this->external_entity_type,true);
		$criteria->compare('external_entity_key_name',$this->external_entity_key_name,true);
		$criteria->compare('external_entity_id',$this->external_entity_id,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('insert_datetime',$this->insert_datetime,true);
		$criteria->compare('inserter',$this->inserter);
		$criteria->compare('last_edit_datetime',$this->last_edit_datetime,true);
		$criteria->compare('last_editor',$this->last_editor);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}