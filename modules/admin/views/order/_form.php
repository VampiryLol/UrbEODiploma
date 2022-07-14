<?php

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Order */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'order_status', ['options' => ['id' => 'cancellation']])->dropDownList([ '0' => 'В обработке', '1' => 'Активный', '2' => 'Завершен', '3' => 'Отменен']) ?>

    <?= $form->field($model, 'cancellation', ['options' => ['id' => 'reason', 'class' => 'none form-group']])->textarea()?>

    <div class="form-group">
        <?= Html::submitButton('Готово', ['class' => 'btn btn-outline-primary m-1 active']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    
</div>

<?php
$this->registerJsFile('js/cancel.js', ['depends' => ['yii\web\YiiAsset', 'yii\bootstrap4\BootstrapAsset'], 'position' => yii\web\View::POS_END])
?>