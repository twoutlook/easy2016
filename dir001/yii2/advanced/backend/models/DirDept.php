<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dir_dept".
 *
 * @property integer $id
 * @property string $code
 * @property string $dept_name
 *
 * @property DirBase[] $dirBases
 */
class DirDept extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dir_dept';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code', 'dept_name'], 'required'],
            [['code'], 'string', 'max' => 8],
            [['dept_name'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Code',
            'dept_name' => 'Dept Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDirBases()
    {
        return $this->hasMany(DirBase::className(), ['dept_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return DirBaseQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DirBaseQuery(get_called_class());
    }
}
