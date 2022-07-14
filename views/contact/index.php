<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\models\Contact;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Обращения';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="contact-index container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'user_id',
            'name',
            'email:email',
            'subject',
            'body',
            'answer',
            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, Contact $model, $key, $index, $column) {
                    // debug($model);
                    return Url::toRoute([$action, 'id' => $model->id]);
                 },
                 'template' => '{view}'
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
