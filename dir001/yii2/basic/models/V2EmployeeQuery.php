<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[V2Employee]].
 *
 * @see V2Employee
 */
class V2EmployeeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return V2Employee[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return V2Employee|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
