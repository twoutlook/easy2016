<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book1001".
 *
 * @property integer $id
 * @property string $title
 * @property integer $author_id
 *
 * @property Book1002 $author
 */
class Book1001 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'book1001';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'author_id'], 'required'],
            [['author_id'], 'integer'],
            [['title'], 'string', 'max' => 32],
            [['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => Book1002::className(), 'targetAttribute' => ['author_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'author_id' => 'Author ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(Book1002::className(), ['id' => 'author_id']);
    }
}
