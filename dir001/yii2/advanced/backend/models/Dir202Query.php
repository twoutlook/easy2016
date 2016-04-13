<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Dir202]].
 *
 * @see Dir202
 */
class Dir202Query extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Dir202[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Dir202|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
