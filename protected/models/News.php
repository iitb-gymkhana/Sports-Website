<?php

/**
 * This is the model class for table "news".
 *
 * The followings are the available columns in table 'news':
 * @property integer $id
 * @property string $usr
 * @property string $title
 * @property string $msg
 * @property string $date
 * @property string $sport
 * @property string $img
 */
class News extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */

	public function tableName()
	{
		return 'news';
	}

	public function primaryKey()
	{
	    return 'id';
	    // For composite primary key, return an array like the following
	    // return array('pk1', 'pk2');
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, msg', 'required'),
			array('id, title, msg, usr, date, sport, img, post_date', 'safe', 'on'=>'search'),
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('msg',$this->msg,true);
		$criteria->compare('usr',$this->usr,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('sport',$this->sport,true);
		$criteria->compare('img',$this->img,true);
		$criteria->compare('post_date',$this->post_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Events the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

}
