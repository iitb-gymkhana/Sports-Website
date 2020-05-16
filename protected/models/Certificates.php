<?php

/**
* This is the model class for table "events".
*
* The followings are the available columns in table 'events':
* @property integer $id
* @property string $usr
* @property string $date
* @property string $title
* @property string $descr
*/
class Certificates extends CActiveRecord
{
/**
 * @return string the associated database table name
 */
public function tableName()
{
  return 'certificates';

}
/**
 * @return array validation rules for model attributes.
 */
public function rules()
{
  // NOTE: you should only define rules for those attributes that
  // will receive user inputs.
  return array(
    array('name, date, title', 'required'),
    // The following rule is used by search().
    // @todo Please remove those attributes that should not be searched.
    array('id, rollno, name, certi_id, date, title, sport,secy_id', 'safe', 'on'=>'search'),
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
    'rollno' => 'rollno',
    'name' => 'Name',
    'date' => 'Date',
    'title' => 'Title',
    'sport' => 'Sport',
    'certi_id' => 'Certi_id',
    'secy_id' => 'Secy_id',
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
  $criteria->compare('rollno',$this->rollno,true);
  $criteria->compare('name',$this->name,true);
  $criteria->compare('date',$this->date,true);
  $criteria->compare('title',$this->title,true);
  $criteria->compare('sport',$this->sport,true);
  $criteria->compare('certi_id',$this->certi_id,true);
  $criteria->compare('secy_id',$this->secy_id,true);
  $criteria->compare('template',$this->secy_id,true);
  $criteria->compare('hostel',$this->secy_id,true);

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
