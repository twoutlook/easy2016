<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%crm001}}".
 *
 * @property string $code
 * @property string $category
 * @property string $item
 * @property string $item2
 * @property string $cust01
 * @property string $cust02
 * @property string $cust03
 */
class Crm001 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%crm001}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code', 'category', 'item', 'item2'], 'required'],
            [['code'], 'string', 'max' => 8],
            [['category'], 'string', 'max' => 64],
            [['item', 'item2', 'cust01', 'cust02', 'cust03'], 'string', 'max' => 1024],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'code' => 'Code',
            'category' => 'Category',
            'item' => 'Item',
            'item2' => 'Item2',
            'cust01' => 'Cust01',
            'cust02' => 'Cust02',
            'cust03' => 'Cust03',
        ];
    }

    /**
     * @inheritdoc
     * @return Crm001Query the active query used by this AR class.
     */
    public static function find()
    {
        return new Crm001Query(get_called_class());
    }
}
