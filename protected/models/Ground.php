<?php

/**
 * This is the model class for table "ground".
 *
 * The followings are the available columns in table 'ground':
 * @property integer $id
 * @property string $user
 * @property string $ldap
 * @property string $sport
 * @property string $date
 * @property string $from
 * @property string $to
 * @property integer $approved
 */
class Ground extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ground';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user, ldap, sport, date, from, to', 'required'),
			array('approved', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user, ldap, sport, date, from, to, approved', 'safe', 'on'=>'search'),
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
			'user' => 'User',
			'ldap' => 'Ldap',
			'sport' => 'Sport',
			'date' => 'Date',
			'from' => 'From',
			'to' => 'To',
			'approved' => 'Approved',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('user',$this->user,true);
		$criteria->compare('ldap',$this->ldap,true);
		$criteria->compare('sport',$this->sport,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('from',$this->from,true);
		$criteria->compare('to',$this->to,true);
		$criteria->compare('approved',$this->approved);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ground the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
