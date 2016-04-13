<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dir201".
 *
 * @property integer $id
 * @property string $code
 * @property string $dept_name
 *
 * @property Dir200[] $dir200s
 */
class Dir201 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dir201';
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
    public function getDir200s()
    {
        return $this->hasMany(Dir200::className(), ['dept_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return Dir201Query the active query used by this AR class.
     */
    public static function find()
    {
        return new Dir201Query(get_called_class());
    }
}
