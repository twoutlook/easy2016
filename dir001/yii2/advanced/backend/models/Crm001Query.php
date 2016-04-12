<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Crm001]].
 *
 * @see Crm001
 */
class Crm001Query extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Crm001[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Crm001|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
