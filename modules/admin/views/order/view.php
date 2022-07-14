<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Order */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Заказы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="order-view">

    <h1>Просмотр заказа от: <?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-outline-primary m-1 active']) ?>
    </p>

<?php
    $arr = [
            //'id',
            'created_at',
            'updated_at',
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
            'description',
            'sum',
    ];

    if($model->order_status == 3){
        $arr[] = 'cancellation';
    }
?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => $arr,
    ]) ?>

<h1>Состав заказа</h1>

<?= GridView::widget([
    'dataProvider' => $order_items,
    'columns' => [
        [
            'attribute' => 'image',
            'value' => function($data){
                return Html::img( Yii::getAlias('@web') . '/upload/store/' . $data->project->images[0]->filePath, ['alt' => 'project', 'height' => 200]);
                
            },
            'format' => 'raw',
        ],
    'name'
    ],
]) ?>

</div>
