<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[DirBase]].
 *
 * @see DirBase
 */
class DirBaseQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return DirBase[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return DirBase|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
