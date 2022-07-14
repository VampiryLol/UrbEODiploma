<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\modules\admin\models\Category;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Категории';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать категорию', ['create'], ['class' => 'btn btn-outline-primary m-1 active']) ?>
    </p>

    <?php Pjax::begin(['enablePushState' => false])?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'layout' => '{pager}<div class="row">{items}</div>{pager}',
        'pager' => ['class' => \yii\bootstrap4\LinkPager::class],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'type',
            'keywords',
            'description',
            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, Category $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

<?php Pjax::end()?>
</div>
