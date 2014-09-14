<?php

/**
 * This is the model class for table "jmuser".
 *
 * The followings are the available columns in table 'jmuser':
 * @property integer $id
 * @property string $oa
 * @property string $password
 * @property string $wave
 * @property string $name
 * @property string $level
 * @property string $gender
 * @property string $phone
 * @property string $bq
 * @property string $depart
 * @property string $race
 * @property string $nation
 * @property string $height
 * @property string $weight
 * @property string $eat
 * @property string $friendname
 * @property string $friendphone
 * @property string $friendaddr
 * @property string $onboardtime
 * @property string $hotel
 * @property string $room
 * @property string $roommate
 * @property string $idcard
 * @property string $endorse
 * @property string $city
 * @property string $huji
 */
class Jmuser extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jmuser';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('oa, password, wave, name, level, gender, phone, bq, depart, onboardtime, hotel, room, roommate, idcard, endorse, city, huji', 'required'),
			array('oa', 'length', 'max'=>64),
			array('password, wave, name, level, gender, phone, bq, depart, race, nation, height, weight, eat, friendname, friendphone, friendaddr, onboardtime, hotel, room, roommate, idcard, endorse, city, huji', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, oa, password, wave, name, level, gender, phone, bq, depart, race, nation, height, weight, eat, friendname, friendphone, friendaddr, onboardtime, hotel, room, roommate, idcard, endorse, city, huji', 'safe', 'on'=>'search'),
		);
	}

	public static function fields() {
		return array(
				'id',
				'oa',
				'password',
				'wave',
				'name',
				'level',
				'gender',
				'phone',
				'bq',
				'depart',
				'race',
				'nation',
				'height',
				'weight',
				'eat',
				'friendname',
				'friendphone',
				'friendaddr',
				'onboardtime',
				'hotel',
				'room',
				'roommate',
				'idcard',
				'endorse',
				'city',
				'huji'); 
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
			'oa' => 'Oa',
			'password' => 'Password',
			'wave' => 'Wave',
			'name' => 'Name',
			'level' => 'Level',
			'gender' => 'Gender',
			'phone' => 'Phone',
			'bq' => 'Bq',
			'depart' => 'Depart',
			'race' => 'Race',
			'nation' => 'Nation',
			'height' => 'Height',
			'weight' => 'Weight',
			'eat' => 'Eat',
			'friendname' => 'Friendname',
			'friendphone' => 'Friendphone',
			'friendaddr' => 'Friendaddr',
			'onboardtime' => 'Onboardtime',
			'hotel' => 'Hotel',
			'room' => 'Room',
			'roommate' => 'Roommate',
			'idcard' => 'Idcard',
			'endorse' => 'Endorse',
			'city' => 'City',
			'huji' => 'Huji',
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
		$criteria->compare('oa',$this->oa,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('wave',$this->wave,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('level',$this->level,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('bq',$this->bq,true);
		$criteria->compare('depart',$this->depart,true);
		$criteria->compare('race',$this->race,true);
		$criteria->compare('nation',$this->nation,true);
		$criteria->compare('height',$this->height,true);
		$criteria->compare('weight',$this->weight,true);
		$criteria->compare('eat',$this->eat,true);
		$criteria->compare('friendname',$this->friendname,true);
		$criteria->compare('friendphone',$this->friendphone,true);
		$criteria->compare('friendaddr',$this->friendaddr,true);
		$criteria->compare('onboardtime',$this->onboardtime,true);
		$criteria->compare('hotel',$this->hotel,true);
		$criteria->compare('room',$this->room,true);
		$criteria->compare('roommate',$this->roommate,true);
		$criteria->compare('idcard',$this->idcard,true);
		$criteria->compare('endorse',$this->endorse,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('huji',$this->huji,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Jmuser the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
