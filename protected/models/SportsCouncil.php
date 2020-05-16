<?php

/**
 * This is the model class for table "sports_council".
 *
 * The followings are the available columns in table 'sports_council':
 * @property integer $id
 * @property string $name
 * @property string $post
 * @property string $ldap
 * @property string $phone
 * @property string $email
 * @property string $hostel
 * @property string $room
 * @property string $roll
 * @property string $category
 * @property string $image
 * @property string $fb
 */
class SportsCouncil extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sports_council';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, post, ldap, phone, email, hostel, room, roll, category, image', 'required'),
			array('fb', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, post, ldap, phone, email, hostel, room, roll, category, image, fb', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'post' => 'Post',
			'ldap' => 'Ldap',
			'phone' => 'Phone',
			'email' => 'Email',
			'hostel' => 'Hostel',
			'room' => 'Room',
			'roll' => 'Roll',
			'category' => 'Category',
			'image' => 'Image',
			'fb' => 'Fb',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('post',$this->post,true);
		$criteria->compare('ldap',$this->ldap,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('hostel',$this->hostel,true);
		$criteria->compare('room',$this->room,true);
		$criteria->compare('roll',$this->roll,true);
		$criteria->compare('category',$this->category,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('fb',$this->fb,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SportsCouncil the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
