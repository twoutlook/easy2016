<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ddl010".
 *
 * @property integer $ID
 * @property integer $SEQ
 * @property string $A
 * @property double $B
 * @property double $C
 */
class Ddl010 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ddl010';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'SEQ', 'A', 'B', 'C'], 'required'],
            [['ID', 'SEQ'], 'integer'],
            [['B', 'C'], 'number'],
            [['A'], 'string', 'max' => 36],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'SEQ' => 'Seq',
            'A' => '材料規格',
            'B' => '材料價格',
            'C' => '廢料價格',
        ];
    }

    /**
     * @inheritdoc
     * @return Ddl010Query the active query used by this AR class.
     */
    public static function find()
    {
        return new Ddl010Query(get_called_class());
    }
}
