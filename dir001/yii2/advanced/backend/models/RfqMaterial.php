<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rfq_material".
 *
 * @property integer $id
 * @property string $material
 * @property double $price1
 * @property double $price2
 * @property integer $seq
 */
class RfqMaterial extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rfq_material';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['material', 'price1', 'price2', 'seq'], 'required'],
            [['price1', 'price2'], 'number'],
            [['seq'], 'integer'],
            [['material'], 'string', 'max' => 36],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'material' => '材料規格',
            'price1' => '材料價格',
            'price2' => '廢料價格',
            'seq' => '排序值',
        ];
    }

    /**
     * @inheritdoc
     * @return RfqMaterialQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new RfqMaterialQuery(get_called_class());
    }
}
