<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Ddl010]].
 *
 * @see Ddl010
 */
class Ddl010Query extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Ddl010[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Ddl010|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
