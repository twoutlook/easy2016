<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "v2_employee".
 *
 * @property integer $id
 * @property string $company_name
 * @property string $department_name
 * @property string $job_name
 * @property string $employee_name
 */
class V2Employee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'v2_employee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'company_name', 'department_name', 'job_name', 'employee_name'], 'required'],
            [['id'], 'integer'],
            [['company_name'], 'string', 'max' => 100],
            [['department_name', 'employee_name'], 'string', 'max' => 32],
            [['job_name'], 'string', 'max' => 64],
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
            'department_name' => '部門名稱',
            'job_name' => '職務名稱',
            'employee_name' => '員工姓名',
        ];
    }

    /**
     * @inheritdoc
     * @return V2EmployeeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new V2EmployeeQuery(get_called_class());
    }
}
