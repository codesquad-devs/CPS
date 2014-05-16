<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "agent".
 *
 * @property string $custno
 * @property string $custname
 * @property string $Address1
 * @property string $address2
 * @property string $address3
 * @property string $telephone1
 * @property string $telephone2
 * @property string $fax
 * @property string $person_contact
 * @property string $area
 * @property string $DateStart
 */
class Agent extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'agent';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DateStart'], 'safe'],
            [['custno'], 'string', 'max' => 10],
            [['custname', 'Address1', 'address2', 'address3', 'person_contact'], 'string', 'max' => 60],
            [['telephone1', 'telephone2', 'fax'], 'string', 'max' => 15],
            [['area'], 'string', 'max' => 4]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'custno' => 'Agent ID',
            'custname' => 'Agent Name',
            'Address1' => 'Address 1',
            'address2' => 'Address 2',
            'address3' => 'Address 3',
            'telephone1' => 'Telephone 1',
            'telephone2' => 'Telephone 2',
            'fax' => 'Fax',
            'person_contact' => 'Person To Contact',
            'area' => 'Area',
            'DateStart' => 'Date Start',
        ];
    }
}
