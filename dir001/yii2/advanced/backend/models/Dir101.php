<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dir101".
 *
 * @property integer $id
 * @property string $code
 * @property string $dept_name
 *
 * @property Dir100[] $dir100s
 */
class Dir101 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dir101';
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
    public function getDir100s()
    {
        return $this->hasMany(Dir100::className(), ['dept_id' => 'id']);
    }
}
