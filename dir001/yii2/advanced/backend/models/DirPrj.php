<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dir_prj".
 *
 * @property integer $id
 * @property string $code
 * @property string $prj_name
 *
 * @property DirBase[] $dirBases
 */
class DirPrj extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dir_prj';
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
    public function getDirBases()
    {
        return $this->hasMany(DirBase::className(), ['prj_id' => 'id']);
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
