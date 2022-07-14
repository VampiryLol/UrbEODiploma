<?php

namespace app\models;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

class Order extends ActiveRecord{

    public static function tableName(){
        return 'order';
    }

    public function getOrderItems(){
        return $this->hasMany(OrderItems::class, ['order_id' => 'id']);
    }

    public function behaviors(){
        return[
            [
                'class' => TimestampBehavior::class,
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                'value' => new Expression('NOW()'),
            ],
        ];
    }

    public function rules(){

        return[
            [['user_id', 'name', 'email', 'phone', 'address', 'description'], 'required'],        
            [['order_status'], 'boolean'],
            [['sum'], 'number'],
            ['email', 'email'],
            ['phone', 'match', 'pattern' => '/^\+*[0-9]+$/u'],
            [['name', 'email', 'phone', 'address', 'description'], 'string', 'min' => 2, 'max' => 255],
            [['created_at', 'updated_at'], 'safe'],
        ];

    }
    
    public function attributeLabels()
    {
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
            'description' => 'Опишите свой заказ',
        ];
    }

}
