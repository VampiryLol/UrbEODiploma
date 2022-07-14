<?php

/** @var yii\web\View $this */
use yii\bootstrap4\{Html, ActiveForm};


$this->title = 'Оставить заказ';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container-fluid py-5">
    <div class="container py-5">


        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col text-center mb-4">

                <h1>Оставить заказ</h1>

            </div>
        </div>
        <div class="container">
        
        <?php $form = ActiveForm::begin(['id' => 'Order-form']);?>
            <?= $form->field($order, 'name')?>
            <?= $form->field($order, 'email')?>
            <?= $form->field($order, 'phone')?>
            <?= $form->field($order, 'address')?>
            <?= $form->field($order, 'description')->textarea()?>
            <?= Html::submitButton('Отправить заказ', ['class' => 'btn btn-primary mt-3 py-2 px-4'])?>
        <?php ActiveForm::end();?>

        
        </div>
    </div>
</div>
</div>