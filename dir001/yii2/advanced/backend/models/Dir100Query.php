<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Dir100]].
 *
 * @see Dir100
 */
class Dir100Query extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Dir100[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Dir100|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
