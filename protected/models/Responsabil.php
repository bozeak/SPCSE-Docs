<?php

/**
 * This is the model class for table "i_responsabil".
 *
 * The followings are the available columns in table 'i_responsabil':
 * @property integer $id
 * @property string $fullname
 * @property integer $grad
 * @property integer $subdiv
 * @property string $contacts
 *
 * The followings are the available model relations:
 * @property ISubdiv $subdiv0
 * @property IGrad $grad0
 */
class Responsabil extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Responsabil the static model class
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
		return 'i_responsabil';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fullname, grad, subdiv, contacts', 'required'),
			array('grad, subdiv', 'numerical', 'integerOnly'=>true),
			array('fullname, contacts', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, fullname, grad, subdiv, contacts', 'safe', 'on'=>'search'),
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
			'subdiv0' => array(self::BELONGS_TO, 'Subdiv', 'subdiv'),
			'grad0' => array(self::BELONGS_TO, 'Grad', 'grad'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'fullname' => 'Fullname',
			'grad' => 'Grad',
			'subdiv' => 'Subdiv',
			'contacts' => 'Contacts',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('fullname',$this->fullname,true);
		$criteria->compare('grad',$this->grad);
		$criteria->compare('subdiv',$this->subdiv);
		$criteria->compare('contacts',$this->contacts,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}