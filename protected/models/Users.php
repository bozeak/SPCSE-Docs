<?php

/**
 * This is the model class for table "u_users".
 *
 * The followings are the available columns in table 'u_users':
 * @property integer $uid
 * @property string $login
 * @property string $password
 * @property integer $rid
 * @property integer $subdiv
 *
 * The followings are the available model relations:
 * @property TDb[] $tDbs
 * @property URoles $r
 */
class Users extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'u_users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('login, password, rid, subdiv', 'required'),
			array('rid, subdiv', 'numerical', 'integerOnly'=>true),
			array('login, password', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('uid, login, password, rid, subdiv', 'safe', 'on'=>'search'),
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
			'tDbs' => array(self::HAS_MANY, 'TDb', 'author'),
			'r' => array(self::BELONGS_TO, 'Roles', 'rid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'uid' => 'Uid',
			'login' => 'Login',
			'password' => 'Password',
			'rid' => 'Rid',
			'subdiv' => 'Subdiv',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('uid',$this->uid);
		$criteria->compare('login',$this->login,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('rid',$this->rid);
		$criteria->compare('subdiv',$this->subdiv);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}