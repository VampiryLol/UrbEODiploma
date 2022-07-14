<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception$exception */

use yii\bootstrap4\Html;

$this->title = $name;
?>

<div class="site-error container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col text-center mb-4">

                <h1><?= Html::encode($this->title) ?></h1>

                <div class="alert alert-danger">
                <?= nl2br(Html::encode($message)) ?>
                </div>

            </div>
        </div>
        <div class="row mx-1 portfolio-container">
        
            <h4>Возникла ошибка, когда мы пытались обработать Ваш запрос. Пожалуйста, сообщите нам, если Вы считаете, что она возникла с нашей стороны, спасибо!</h4>
            
        </div>
    </div>
</div>
