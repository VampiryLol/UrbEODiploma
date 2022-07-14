<?php

use yii\helpers\Html;
use yii\helpers\VarDumper;
use yii\widgets\DetailView;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Project */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Проекты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="project-view">

    <h1>Просмотр дизайна: <?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-outline-primary m-1 active']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-outline-primary m-1',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить этот дизайн?',
                'method' => 'post',
            ],
        ]) ?>
    </p>



    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'status_id',
                'value' => function($data){
                    return $data->status->status;
                },
            ],
            //'status_id',
            [
                'attribute' => 'category_id',
                'value' => function($data){
                    return $data->category->type;
                },
            ],
            //'category_id',
            'name',
            'price',
            [
                'attribute' => 'image',
                'value' => function($data){
                    return 
                    Html::img( Yii::getAlias('@web') . '/upload/store/' . $data->getImage()->filePath, ['alt' => 'project']);
                    
                },
                'format' => 'raw',
            ],
            'keyword',
            'description',
        ],
    ]) ?>
</div>
