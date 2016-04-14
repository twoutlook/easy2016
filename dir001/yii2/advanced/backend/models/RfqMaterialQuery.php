<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[RfqMaterial]].
 *
 * @see RfqMaterial
 */
class RfqMaterialQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return RfqMaterial[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return RfqMaterial|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
