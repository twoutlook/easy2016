<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Dir201]].
 *
 * @see Dir201
 */
class Dir201Query extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Dir201[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Dir201|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
