<?php

/**
 * FavrsearchForm class.
 * FavrsearchForm is the data structure for keeping
 * favrsearch form data. It is used by the 'favrsearch' action of 'SiteController'.
 */
class FavrsearchForm extends CFormModel
{
	public $latitude;
	public $longitude;
	public $radius;
	public $terms;
	public $category_search;

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			// latitude, longitude, radius and terms are required
			array('latitude, longitude, radius, terms', 'required'),
			// latitude, longitude, radius must be numbers
			array('latitude, longitude, radius', 'numerical'),
			// category_search has to be a boolean
			array('category_search', 'boolean')
		);
	}

	/**
	 * Declares customized attribute labels.
	 * If not declared here, an attribute would have a label that is
	 * the same as its name with the first letter in upper case.
	 */
	public function attributeLabels()
	{
		return array(
			'verifyCode'=>'Verification Code',
		);
	}
}