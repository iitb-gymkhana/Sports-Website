<?php

/**
 * This is the model class for table "quest".
 *
 * The followings are the available columns in table 'quest':
 * @property integer $id
 * @property string $Name
 * @property string $RollNumber
 * @property string $Photo
 * @property string $Team
 * @property string $Summary
 * @property string $About
 */
class Quest extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'quest';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RollNumber', 'required'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Name, RollNumber, Photo, Team, YearDept, Position, Medals , About', 'safe', 'on'=>'search'),
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
			'Name' => 'Name',
			'RollNumber' => 'RollNumber',
			'Photo' => 'Photo',
			'Team' => 'Team',
			'About' => 'About',
			'YearDept'=>'YearDept', 
			'Position'=>'Position', 
			'Medals'=>'Medals',
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
		$criteria->compare('Name',$this->Name,true);
		$criteria->compare('RollNumber',$this->RollNumber,true);
		$criteria->compare('Photo',$this->Photo,true);
		$criteria->compare('Team',$this->Team,true);
		$criteria->compare('YearDept',$this->YearDept,true);
		$criteria->compare('Medals',$this->Medals,true);
		$criteria->compare('Position',$this->Position,true);
		$criteria->compare('About',$this->About,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Quest the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
