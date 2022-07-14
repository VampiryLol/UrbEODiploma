<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\modules\admin\models\Order;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Заказы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index">

    <h1><?= Html::encode($this->title) ?></h1>

<?php Pjax::begin(['enablePushState' => false])?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'layout' => '{pager}<div class="row">{items}</div>{pager}',
        'pager' => ['class' => \yii\bootstrap4\LinkPager::class],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'created_at',
            //'updated_at',
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
            'email:email',
            'phone',
            'address',
            //'description',
            'sum',
            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, Order $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 },
                 'template' => '{view} {update}'
            ],
        ],
    ]); ?>

<?php Pjax::end()?>
</div>
