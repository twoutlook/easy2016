<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "company".
 *
 * @property integer $id
 * @property string $company_name
 * @property string $company_short
 * @property string $company_addr
 *
 * @property Employee[] $employees
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
            [['id', 'company_name', 'company_short', 'company_addr'], 'required'],
            [['id'], 'integer'],
            [['company_name'], 'string', 'max' => 100],
            [['company_short'], 'string', 'max' => 32],
            [['company_addr'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'company_name' => '公司名稱',
            'company_short' => 'Company Short',
            'company_addr' => 'Company Addr',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployees()
    {
        return $this->hasMany(Employee::className(), ['company_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return CompanyQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CompanyQuery(get_called_class());
    }
}
