<?php use yii\bootstrap4\Html;?>
<?php if(!empty($session['cart'])):?>
    <div class="container table-responsive">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>Фото</th>
                <th>Категория</th>
                <th>Название дизайна</th>
                <th>Цена*</th>
                <th><span data-id="<?= $id?>" class="item" aria-hidden="true"><?= Html::img("@web/assets/bi/x-circle-fill.svg", ['alt' => 'remove'], ['class' => 'item'])?></span></th>
            </tr>         
            </thead>
            <tbody>
                <?php foreach($session['cart'] as $id => $item): ?>
                <tr>
                    <td><?= $item['image']?></td>
                    <td><?= $item['category_id']?></td>
                    <td><?= $item['name']?></td>
                    <td>От <?= $item['price']?> руб.</td>
                    <td><span data-id="<?= $id?>" class="del-item" aria-hidden="true"><?= Html::img("@web/assets/bi/x-circle.svg", ['alt' => 'remove'], ['class' => 'del-item'])?></span></td>
                </tr>
                <?php endforeach;?>
                <tr>
                    <td><h4>Итого:</h4></td>
                    <td></td>
                    <td></td>
                    <td id="sum">От <?= $session['cart.sum']?> руб.</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
</div>
<?php else:?>
<div class="container row justify-content-center">
    <h3 class="text-primary font-weight-normal text-uppercase mb-3">Корзина пуста</h3>
</div>
<?php endif;?>