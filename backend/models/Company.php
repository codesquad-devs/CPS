<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "company".
 *
 * @property string $Company_name
 * @property string $other_name
 * @property string $Address1
 * @property string $address2
 * @property string $address3
 * @property string $Telephone1
 * @property string $Telephone2
 * @property string $Telephone3
 * @property string $Telephone4
 * @property string $Telephone5
 * @property string $fax1
 * @property string $fax2
 * @property string $fax3
 * @property string $email1
 * @property string $email2
 * @property string $email3
 * @property string $website
 * @property string $finyear_s
 * @property string $finyear_e
 * @property string $income_tax
 * @property string $epf
 * @property string $sosco
 * @property string $currency
 * @property string $company_number
 */
class Company extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'company';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['finyear_s', 'finyear_e'], 'safe'],
            [['Company_name', 'other_name', 'Address1', 'address2', 'address3'], 'string', 'max' => 60],
            [['Telephone1', 'Telephone2', 'Telephone3', 'Telephone4', 'Telephone5', 'fax1', 'fax2', 'fax3'], 'string', 'max' => 15],
            [['email1', 'email2', 'email3', 'website'], 'string', 'max' => 50],
            [['income_tax', 'epf', 'sosco'], 'string', 'max' => 25],
            [['currency'], 'string', 'max' => 4],
            [['company_number'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Company_name' => 'Company Name',
            'other_name' => 'Other Name',
            'Address1' => 'Address1',
            'address2' => 'Address2',
            'address3' => 'Address3',
            'Telephone1' => 'Telephone1',
            'Telephone2' => 'Telephone2',
            'Telephone3' => 'Telephone3',
            'Telephone4' => 'Telephone4',
            'Telephone5' => 'Telephone5',
            'fax1' => 'Fax1',
            'fax2' => 'Fax2',
            'fax3' => 'Fax3',
            'email1' => 'Email1',
            'email2' => 'Email2',
            'email3' => 'Email3',
            'website' => 'Website',
            'finyear_s' => 'Finyear S',
            'finyear_e' => 'Finyear E',
            'income_tax' => 'Income Tax',
            'epf' => 'Epf',
            'sosco' => 'Sosco',
            'currency' => 'Currency',
            'company_number' => 'Company Number',
        ];
    }
}
