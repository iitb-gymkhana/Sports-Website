<?php

/**
 * This is the model class for table "courtbook".
 *
 * The followings are the available columns in table 'courtbook':
 * @property integer $id
 * @property string $user
 * @property string $sport
 * @property string $court
 * @property string $date
 * @property string $time
 * @property integer $booked
 */
class Courtbook extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'courtbook';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user, ldap, sport, court, date, time', 'required'),
		);
	}


}
