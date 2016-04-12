<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[VEmployee]].
 *
 * @see VEmployee
 */
class VEmployeeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return VEmployee[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return VEmployee|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
