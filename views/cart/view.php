<?php
use yii\bootstrap4\{Html, ActiveForm};
use yii\helpers\Url;

$this->title = 'Корзина';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php if(!empty($session['cart'])):?>
<div id="cart-div">
    <div class="container table-responsive" id="del">
    <div class="row justify-content-center">
<div class="col-lg-6 col-md-8 col text-center mb-4">

<h1>Состав корзины</h1>

</div>
</div>
        <table class="table table-hover table-striped" id="cart-table">
            <thead>
            <tr>
                <th>Фото</th>
                <th>Категория</th>
                <th>Название дизайна</th>
                <th>Цена дизайна*</th>
                <th><span data-id="<?= $id?>" class="item" aria-hidden="true"><?= Html::img("@web/assets/bi/x-circle-fill.svg", ['alt' => 'remove'], ['class' => 'item'])?></span></th>
            </tr>         
            </thead>
            <tbody>
                <?php foreach($session['cart'] as $id => $item): ?>
                <tr id="item-<?= $id?>">
                    <td><?= $item['image']?></td>
                    <td><?= $item['category_id']?></td>
                    <td><?= $item['name']?></td>
                    <td class="price">От <?= $item['price']?> руб.</td>
                    <td><span data-id="<?= $id?>" class="cart-del-item" aria-hidden="true"><?= Html::img("@web/assets/bi/x-circle.svg", ['alt' => 'remove'], ['class' => 'cart-del-item'])?></span></td>
                </tr>
                <?php endforeach;?>
                <tr id="sum">
                    <td><h4>Итого:</h4></td>
                    <td></td>
                    <td></td>
                    <td class="sum">От <?= $session['cart.sum']?> руб.</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <h6>*Окончательная цена будет сформирована после оформления заказа и диалога с нашими дизайнерами.</h6>
        <button type="button" class="btn btn-primary clear-cart-all">Очистить корзину</button>
    </div>

<div class="container-fluid py-5">
    <div class="container py-5">


        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col text-center mb-4">

                <h1>Сделать заказ</h1>

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

<?php else:?>
<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col text-center mb-4">
                <h1>Корзина пуста</h1>
                </div>
            </div>
        </div>
</div>
<?php endif;?>

