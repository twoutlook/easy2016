<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dir102".
 *
 * @property integer $id
 * @property string $code
 * @property string $prj_name
 *
 * @property Dir100[] $dir100s
 */
class Dir102 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dir102';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code', 'prj_name'], 'required'],
            [['code'], 'string', 'max' => 8],
            [['prj_name'], 'string', 'max' => 32],
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
            'prj_name' => '項目名稱',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDir100s()
    {
        return $this->hasMany(Dir100::className(), ['prj_id' => 'id']);
    }
}
