<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $role
 * @property string $username
 * @property string $password
 * @property string|null $auth_key
 */
class SignupForm extends ActiveRecord
{
    public $username;
    public $password;
    public $role;
    public $password2;


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            [['role', 'username', 'password'], 'string', 'max' => 255],
            [['username'], 'unique', 'targetClass' => User::class,  'message' => 'Извините, этот логин уже занят, введите другой.'],
            ['password2', 'compare', 'compareAttribute' => 'password', 'message' => "Пароли не совпадают."],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'username' => 'Логин',
            'password' => 'Пароль',
            'password2' => 'Повторите пароль',
        ];
    }
}
