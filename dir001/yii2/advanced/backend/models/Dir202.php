<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dir202".
 *
 * @property integer $id
 * @property string $code
 * @property string $prj_name
 *
 * @property Dir200[] $dir200s
 */
class Dir202 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dir202';
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
    public function getDir200s()
    {
        return $this->hasMany(Dir200::className(), ['prj_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return Dir202Query the active query used by this AR class.
     */
    public static function find()
    {
        return new Dir202Query(get_called_class());
    }
}
