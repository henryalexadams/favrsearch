<?php

/**
 * This is the model class for table "topic".
 *
 * The followings are the available columns in table 'topic':
 * @property integer $id
 * @property integer $forum_id
 * @property string $topic_type
 * @property string $name
 * @property string $title
 * @property string $description
 * @property string $weight
 * @property integer $views
 * @property integer $votes
 * @property string $status
 * @property string $insert_datetime
 * @property integer $inserter
 * @property string $last_edit_datetime
 * @property integer $last_editor
 */
class Topic extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Topic the static model class
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
		return 'topic';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('forum_id, views, votes, inserter, last_editor', 'numerical', 'integerOnly'=>true),
			array('topic_type, status', 'length', 'max'=>50),
			array('name, title', 'length', 'max'=>150),
			array('description', 'length', 'max'=>512),
			array('weight', 'length', 'max'=>2),
			array('insert_datetime, last_edit_datetime', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, forum_id, topic_type, name, title, description, weight, views, votes, status, insert_datetime, inserter, last_edit_datetime, last_editor', 'safe', 'on'=>'search'),
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
			'forum_id' => 'Forum',
			'topic_type' => 'Topic Type',
			'name' => 'Name',
			'title' => 'Title',
			'description' => 'Description',
			'weight' => 'Weight',
			'views' => 'Views',
			'votes' => 'Votes',
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
		$criteria->compare('forum_id',$this->forum_id);
		$criteria->compare('topic_type',$this->topic_type,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('weight',$this->weight,true);
		$criteria->compare('views',$this->views);
		$criteria->compare('votes',$this->votes);
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