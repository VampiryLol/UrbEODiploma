<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Order;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\LkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Мои заказы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php Pjax::begin(['enablePushState' => false]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            // 'user_id',
            // 'created_at',
            // 'updated_at',
            [
                'attribute' => 'order_status',
                'value' => function($data){
                    switch($data->order_status){
                        case 0:
                            return "В обработке";
                        case 1:
                            return "Активный";
                        case 2:
                            return "Завершен";
                        case 3:
                            return "Отменен";
                    }                
                },
            ],
            'name',
            // 'email:email',
            // 'phone',
            'address',
            'description',
            'sum',
            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, Order $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 },
                'template' => '{view}'
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
