<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $email
 * @property string $subject
 * @property string $body
 * @property string|null $answer
 *
 * @property User $user
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'name', 'email', 'subject', 'body'], 'required'],
            [['user_id'], 'integer'],
            [['name', 'email', 'subject'], 'string', 'max' => 255],
            [['body', 'answer'], 'string', 'max' => 1500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'name' => 'Имя',
            'email' => 'Электронная почта',
            'subject' => 'Причина обращения',
            'body' => 'Обращение',
            'answer' => 'Ответ',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */

}
