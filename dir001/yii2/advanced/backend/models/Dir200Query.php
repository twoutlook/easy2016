<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Dir200]].
 *
 * @see Dir200
 */
class Dir200Query extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Dir200[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Dir200|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
