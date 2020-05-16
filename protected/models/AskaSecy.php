<?php

/**
 * This is the model class for table "askaSecy".
 *
 * The followings are the available columns in table 'askaSecy':
 * @property string $usr
 * @property string $date
 * @property string $ldap
 * @property string $sport
 * @property integer $phone
 * @property string $subject
 * @property string $msg
 * @property integer $id
 */
class AskaSecy extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'askasecy';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usr, date, ldap, sport, phone, subject, msg', 'required'),
			array('phone', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('usr, date, ldap, sport, phone, subject, msg, id', 'safe', 'on'=>'search'),
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
			'usr' => 'Usr',
			'date' => 'Date',
			'ldap' => 'Ldap',
			'sport' => 'Sport',
			'phone' => 'Phone',
			'subject' => 'Subject',
			'msg' => 'Msg',
			'id' => 'ID',
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

		$criteria->compare('usr',$this->usr,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('ldap',$this->ldap,true);
		$criteria->compare('sport',$this->sport,true);
		$criteria->compare('phone',$this->phone);
		$criteria->compare('subject',$this->subject,true);
		$criteria->compare('msg',$this->msg,true);
		$criteria->compare('id',$this->id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AskaSecy the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
