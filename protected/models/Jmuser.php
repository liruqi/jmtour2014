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
    public function birth() {
        $IDCard = $this->idcard;
        if(strlen($IDCard)==18){
            $tyear=intval(substr($IDCard,6,4));
            $tmonth=intval(substr($IDCard,10,2));
            $tday=intval(substr($IDCard,12,2));
            $tdate=$tyear."-".$tmonth."-".$tday;
        }elseif(strlen($IDCard)==15){
            $tyear=intval("19".substr($IDCard,6,2));
            $tmonth=intval(substr($IDCard,8,2));
            $tday=intval(substr($IDCard,10,2));
            
            $tdate=$tyear."-".$tmonth."-".$tday;
        }
        return $tdate;
    }
    public function age() {
        $IDCard = $this->idcard;
        if(strlen($IDCard)==18){
            $tyear=intval(substr($IDCard,6,4));
            $tmonth=intval(substr($IDCard,10,2));
            $tday=intval(substr($IDCard,12,2));
        }elseif(strlen($IDCard)==15){
            $tyear=intval("19".substr($IDCard,6,2));
            $tmonth=intval(substr($IDCard,8,2));
            $tday=intval(substr($IDCard,10,2));
        }
        return date("Y") - $tyear;
    }
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
			array('oa,  wave, name, level, gender, phone, bq, depart, hotel, room, roommate, idcard, endorse, city, huji', 'required'),
			array('oa', 'length', 'max'=>64),
			array('password, wave, name, level, gender, phone, bq, depart, race, nation, height, weight, eat, friendname, friendphone, friendaddr, onboardtime, hotel, room, roommate, idcard, endorse, city, huji', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, oa, password, wave, name, level, gender, phone, bq, depart, race, nation, height, weight, eat, friendname, friendphone, friendaddr, onboardtime, hotel, room, roommate, idcard, endorse, city, huji', 'safe', 'on'=>'search'),
		);
	}

    public static function paperFields() {
        return array(
            'twpassport',
            'twfrom',
            'twstarttime',
            'twendtime',
            'twendorsestart',
            'twendorseend',
            'twendorsefrom',
            'hkpassport',
            'hkfrom',
            'hkstarttime',
            'hkendtime',
            'hkendorsestart',
            'hkendorseend',
            'hkendorsefrom',
            'hkendorsetype',
            'hkendorsecnt',
            'hkendorseused',
            'cnpassport',
            'cnstarttime',
            'cnendtime'
        );
    }

    public static function extraFields() {
        return array(
            'luxian',
            'homecity',
            'homearea',
            'homeaddr',
            'hukoucity',
            'hukouarea',
            'hukouaddr',
            'education',
            'school',
            'major',
            'graduate',
        );
    }

    public static function dumpFields() {
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
				'title',
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
				'departureport',
				'endorse',
				'city',
				'huji'); 
	}

	public static function fields() {
		return array(
				'id',
				'oa',
				'wave',
				'name',
				'level',
				'gender',
				'phone',
				'bq',
				'depart',
				'title',
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
				'departureport',
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
			'oa' => 'OA账号',
			'password' => 'Password',
			'wave' => '批次',
			'name' => '姓名',
			'level' => '等级',
			'gender' => '性别',
			'phone' => '联系电话',
			'bq' => '板块',
			'depart' => '部门',
			'title' => '职级',
			'race' => '民族',
			'nation' => '国籍',
			'height' => '身高',
			'weight' => '体重',
			'eat' => '餐饮忌口',
			'friendname' => '紧急联络人姓名',
			'friendphone' => '紧急联络人电话',
			'friendaddr' => '紧急联络人地址',
			'onboardtime' => '入职时间',
			'hotel' => '入住酒店',
			'room' => '房型',
			'roommate' => '分房安排',
			'idcard' => '身份证号码',
			'departureport' => '出发口岸',
			'endorse' => '签注类别',
			'city' => '常住地',
            'huji' => '户籍',

            'luxian' => '路线选择',
            'homecity' => '家庭省份',
            'homearea' => '家庭区域',
            'homeaddr' => '家庭住址',
            'hukoucity' => '户籍所在地省份',
            'hukouarea' => '户籍所在地区域',
            'hukouaddr' => '户籍所在地',
            'education' => '最高学历',
            'school' => '毕业院校',
            'major' => '专业',
            'graduate' => '毕业时间',

            'twpassport' => '台湾通行证号码',
            'twfrom' => '台湾通行证签发地点',
            'twstarttime' => '台湾通行证签发日期',
            'twendtime' => '台湾通行证有效日期',
            'twendorsestart' => '台湾签注签发日期',
            'twendorseend'=>'台湾签注有效期',
            'twendorsefrom'=>'台湾签发地点',
            'hkpassport'=>'港澳通行证号码',
            'hkfrom'=>'港澳通行证签发地点',
            'hkstarttime'=>'港澳通行证签发日期',
            'hkendtime'=>'港澳通行证有效日期',
            'hkendorsestart'=>'港澳签注签发日期',
            'hkendorseend'=>'港澳签注有效期',
            'hkendorsefrom'=>'港澳签发地点',
            'hkendorsecnt'=>'港澳签注次数',
            'hkendorseused'=>'港澳签注已使用次数',
            'hkendorsetype'=>'港澳签注类型',
            'cnpassport'=>'护照号码',
            'cnstarttime'=>'护照签发日期',
            'cnendtime'=>'护照有效日期'
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

		$criteria->compare('oa',$this->oa,true);
		$criteria->compare('wave',$this->wave,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('level',$this->level,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('bq',$this->bq,true);
		$criteria->compare('depart',$this->depart,true);
		$criteria->compare('race',$this->race,true);
		$criteria->compare('eat',$this->eat,true);
		$criteria->compare('room',$this->room,true);
		$criteria->compare('roommate',$this->roommate,true);
		$criteria->compare('idcard',$this->idcard,true);
		$criteria->compare('endorse',$this->endorse,true);

		return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
            'pagination'=>array(
                'pageSize'=> 500,
            ),
		));
	}

    public function orSearch() {
        $criteria=new CDbCriteria();
        $criteria->compare('oa',$this->oa,true);

        foreach(array('name', 'idcard', 'phone') as $idx => $f) {
            $c = new CDbCriteria();
            $c->compare($f, $this->$f);
            $criteria->mergeWith($c, false);
        }
        
        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
            'pagination'=>array(
                'pageSize'=> 500,
            ),
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
