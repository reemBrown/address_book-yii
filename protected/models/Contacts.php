<?php

/**
 * This is the model class for table "contacts".
 *
 * The followings are the available columns in table 'contacts':
 * @property integer $id
 * @property string $name
 * @property string $phone
 * @property string $locationx
 * @property string $locationy
 * @property string $photo
 */
class Contacts extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'contacts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, phone, locationx, locationy', 'length', 'max'=>45),
			array('locationx','checkLocationY'),
			array('locationy','checkLocationX'),
			array('name','required'),
			array('phone','required'),
			

			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('locationx, locationy','numerical'),
			array('name, phone, locationx, locationy', 'safe', 'on'=>'search'),
			array('photo', 'file','types'=>'jpg, png', 'allowEmpty'=>true, 'on'=>'insert'), 
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
			'phone' => 'Phone',
			'locationx' => 'Locationx',
			'locationy' => 'Locationy',
			'photo' => 'Photo',
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
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('locationx',$this->locationx,true);
		$criteria->compare('locationy',$this->locationy,true);
		$criteria->compare('photo',$this->photo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Contacts the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	public function checkLocationX($attributes,$params)
	{
	  if(empty($this->locationx) && !empty($this->locationy) ){
	         $this->addError('locationx','You have to enter location X');
	  }  
	}
	public function checkLocationY($attributes,$params)
	{
	  if(!empty($this->locationx) && empty($this->locationy) ){
	         $this->addError('locationy','You have to enter location Y');
	  } 
	}
}
