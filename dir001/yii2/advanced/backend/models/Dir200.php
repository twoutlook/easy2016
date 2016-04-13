<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dir200".
 *
 * @property integer $id
 * @property integer $dept_id
 * @property integer $prj_id
 * @property string $job_title
 * @property string $empe_name
 * @property string $ext_num
 * @property string $cell_num
 * @property string $mailbox
 *
 * @property Dir202 $prj
 * @property Dir201 $dept
 */
class Dir200 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dir200';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dept_id', 'job_title', 'empe_name', 'ext_num', 'cell_num', 'mailbox'], 'required'],
            [['dept_id', 'prj_id'], 'integer'],
            [['job_title', 'empe_name', 'ext_num', 'cell_num'], 'string', 'max' => 32],
            [['mailbox'], 'string', 'max' => 64],
            [['prj_id'], 'exist', 'skipOnError' => true, 'targetClass' => Dir202::className(), 'targetAttribute' => ['prj_id' => 'id']],
            [['dept_id'], 'exist', 'skipOnError' => true, 'targetClass' => Dir201::className(), 'targetAttribute' => ['dept_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dept_id' => '部門ID',
            'prj_id' => '項目ID',
            'job_title' => '職稱',
            'empe_name' => '姓名',
            'ext_num' => '分機',
            'cell_num' => '手機號碼',
            'mailbox' => '郵箱',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrj()
    {
        return $this->hasOne(Dir202::className(), ['id' => 'prj_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDept()
    {
        return $this->hasOne(Dir201::className(), ['id' => 'dept_id']);
    }

    /**
     * @inheritdoc
     * @return Dir200Query the active query used by this AR class.
     */
    public static function find()
    {
        return new Dir200Query(get_called_class());
    }
}
