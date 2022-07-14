<?php use yii\bootstrap4\Html;?>

<li class="btn btn-outline-primary m-1 active">

    <?= Html::a($view['status'], ['category/view' , 'id' => Yii::$app->request->get('id'), 'status' => $view['id']], ['class' => 'dropdown-item'])?>

    <!-- <a href="<?=Yii::getAlias('@web')?>/category/view?status=<?= $view['status']?>" class="dropdown-item">  -->
        <!-- <?= $view['status']?> -->
    <!-- </a> -->
</li>