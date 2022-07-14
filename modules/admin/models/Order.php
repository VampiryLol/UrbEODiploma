<?php

namespace app\modules\admin\models;

use Yii;

class Order extends \yii\db\ActiveRecord{



    public static function tableName(){
        return 'order';
    }

    public function rules(){

        return[
            [['created_at', 'updated_at', 'sum', 'name', 'email', 'phone', 'address', 'description'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['sum'], 'number'],
            [['order_status'], 'string'],
            [['email'], 'email'],
            ['phone', 'match', 'pattern' => '/^\+*[0-9]+$/u'],
            [['name', 'email', 'phone', 'address', 'description'], 'string', 'max' => 255],
        ];

    }

    public function attributeLabels(){

        return[
            'id' => 'Заказ №',
            'created_at' => "Создано в",
            'updated_at' => "Обновлено в",
            'order_status' => 'Статус заказа',
            'sum' => 'Итого',
            'name' => 'Имя',
            'email' => 'Почта',
            'phone' => 'Телефон',
            'address' => 'Адрес',
            'cancellation' => 'Причина отмены',
            'description' => 'Описание',
        ];
    }

}