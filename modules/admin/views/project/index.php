<?php

use yii\bootstrap4\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\modules\admin\models\Project;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Проекты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать проект', ['create'], ['class' => 'btn btn-outline-primary m-1 active']) ?>
        
    </p>

<?php Pjax::begin(['enablePushState' => false])?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'layout' => '{pager}<div class="row">{items}</div>{pager}',
        'pager' => ['class' => \yii\bootstrap4\LinkPager::class],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            [
                'attribute' => 'status_id',
                'value' => function($data){
                    return $data->status->status;
                },
            ],
            //'status_id',
            //'category_id',
            [
                'attribute' => 'category_id',
                'value' => function($data){
                    return $data->category->type;
                },
            ],
            'name',
            //'img',
            'price',
            'keyword',
            'description',
            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, Project $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

<?php Pjax::end()?>
</div>
