<?php

namespace app\models;

use \yii\db\ActiveRecord;
use Yii;

/**
 * This is the model class for table "order_items".
 *
 * @property int $id
 * @property int $order_id
 * @property int $project_id
 * @property string $name
 *
 * @property Order $order
 * @property Project $project
 */
class OrderItems extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }


    public static function tableName()
    {
        return 'order_items';
    }

    public function getOrder(){
        return $this->hasOne(Order::class, ['id' => 'order_id']);
    }


    public function attributeLabels()
    {
        return [
            'image' => 'Фото дизайна',
            'name' => 'Название',
            'price' => 'Цена дизайна',
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_id', 'project_id', 'name'], 'required'],
            [['order_id', 'project_id', 'image'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['order_id'], 'exist', 'skipOnError' => true, 'targetClass' => Order::class, 'targetAttribute' => ['order_id' => 'id']],
            [['project_id'], 'exist', 'skipOnError' => true, 'targetClass' => Project::class, 'targetAttribute' => ['project_id' => 'id']],
            // ['image', 'safe'],
        ];
    }

    /**
     * Gets query for [[Project]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProject()
    {
        return $this->hasOne(Project::class, ['id' => 'project_id']);
    }

}
