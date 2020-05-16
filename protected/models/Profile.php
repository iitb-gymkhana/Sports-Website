<?php

/**
 * This is the model class for table "profile".
 *
 * The followings are the available columns in table 'profile':
 * @property integer $Id
 * @property string $Name
 * @property string $RollNumber
 * @property string $Hostel
 * @property string $RoomNo
 * @property string $About
 * @property string $GCAch
 * @property string $InterIITAch
 * @property string $OthersAch
 * @property string $PhoneNumber
 * @property string $Email
 * @property string $Team
 */
class Profile extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'profile';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('Name, RollNumber, Hostel, RoomNo, About, GCAch, InterIITAch, OthersAch, PhoneNumber, Email, Team', 'required'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Id, Name, RollNumber, Hostel, RoomNo, About, GCAch, InterIITAch, OthersAch, PhoneNumber, Email, Team', 'safe', 'on'=>'search'),
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
			'Id' => 'ID',
			'Name' => 'Name',
			'RollNumber' => 'Roll Number',
			'Hostel' => 'Hostel',
			'RoomNo' => 'Room No',
			'About' => 'About',
			'GCAch' => 'Gcach',
			'InterIITAch' => 'Inter Iitach',
			'OthersAch' => 'Others Ach',
			'PhoneNumber' => 'Phone Number',
			'Email' => 'Email',
			'Team' => 'Team',
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

		$criteria->compare('Id',$this->Id);
		$criteria->compare('Name',$this->Name,true);
		$criteria->compare('RollNumber',$this->RollNumber,true);
		$criteria->compare('Hostel',$this->Hostel,true);
		$criteria->compare('RoomNo',$this->RoomNo,true);
		$criteria->compare('About',$this->About,true);
		$criteria->compare('GCAch',$this->GCAch,true);
		$criteria->compare('InterIITAch',$this->InterIITAch,true);
		$criteria->compare('OthersAch',$this->OthersAch,true);
		$criteria->compare('PhoneNumber',$this->PhoneNumber,true);
		$criteria->compare('Email',$this->Email,true);
		$criteria->compare('Team',$this->Team,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Profile the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
