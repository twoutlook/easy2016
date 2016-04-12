<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dir".
 *
 * @property integer $id
 * @property string $dept_name
 * @property string $job_title
 * @property string $empe_name
 * @property string $ext_num
 * @property string $cell_num
 * @property string $mailbox
 */
class Dir extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dir';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dept_name', 'job_title', 'empe_name', 'ext_num', 'cell_num', 'mailbox'], 'required'],
            [['dept_name', 'job_title', 'empe_name', 'ext_num', 'cell_num'], 'string', 'max' => 32],
            [['mailbox'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dept_name' => '部門',
            'job_title' => '職稱',
            'empe_name' => '姓名',
            'ext_num' => '分機',
            'cell_num' => '手機號碼',
            'mailbox' => '郵箱',
        ];
    }

    /**
     * @inheritdoc
     * @return DirQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DirQuery(get_called_class());
    }
}
