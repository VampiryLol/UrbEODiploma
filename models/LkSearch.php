<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Order;
use app\models\Image;
use Yii;

/**
 * LkSearch represents the model behind the search form of `app\models\Order`.
 */
class LkSearch extends Order
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id'], 'integer'],
            [['created_at', 'updated_at', 'order_status', 'name', 'email', 'phone', 'address', 'description'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return[
            'id' => 'Заказ №',
            'created_at' => "Создано в",
            'updated_at' => "Обновлено в",
            'order_status' => 'Статус заказа',
            'name' => 'Имя',
            'email' => 'Почта',
            'phone' => 'Телефон',
            'address' => 'Адрес',
            'description' => 'Короткое описание заказа',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Order::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        $query->where(['user_id' => Yii::$app->user->id]);
        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'user_id' => $this->user_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'order_status', $this->order_status])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }

    public function getImages()
    {
        return $this->hasOne(Image::class, ['image' => 'id']);
    }

}
