<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "job".
 *
 * @property integer $id
 * @property string $job_name
 * @property string $job_remark
 *
 * @property Employee[] $employees
 */
class Job extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'job';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'job_name', 'job_remark'], 'required'],
            [['id'], 'integer'],
            [['job_name'], 'string', 'max' => 64],
            [['job_remark'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'job_name' => '職務名稱',
            'job_remark' => 'Job Remark',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployees()
    {
        return $this->hasMany(Employee::className(), ['job_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return JobQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new JobQuery(get_called_class());
    }
}
