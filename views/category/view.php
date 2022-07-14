<?php

/** @var yii\web\View $this */
use yii\bootstrap4\Html;
use yii\widgets\Pjax;
use app\components\ViewWidget;

?>

    <!-- Projects Start -->
    <?php Pjax::begin(['enablePushState' => false, 'timeout' => 5000])?>
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col text-center mb-4">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Каталог дизайнов</h6>
                    <h3 class="mb-4">Каталог наших работ дизайн-интерьеров, который постоянно обновляется!</h3>
                    <h1><?= $category->type?></h1>
                </div>
            </div>

            <?php if(Yii::$app->user->identity->role == 'admin'): ?>
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                    <li class="btn btn-outline-primary m-1 active">
                        <?= Html::a('Показать все', ['category/view' , 'id' => Yii::$app->request->get('id')], ['class' => 'dropdown-item'])?>
                    </li>
                    <?= ViewWidget::widget(['tpl' => 'view'])?>
                    </ul>
                </div>
            </div>
            <?php endif;?>
            
            <?php if(!empty($projecttype)): ?> 
            <div class="row mx-1 container">
                <?php foreach($projecttype as $projecttypee): ?>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item first">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img d-flex align-items-center justify-content-center">
                        <?= Html::img("@web/upload/store/{$projecttypee->images[0]->filePath}", ['alt' => $projecttypee->name])?>
                        </div>
                        <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white mb-4"><?= $projecttypee->name?></h4>
                            <h5 class="text-primary font-weight-normal text-uppercase mb-3">От <?= $projecttypee->price?> руб.</h5>
                            <div class="d-flex align-items-center justify-content-center">
                            <?php if(Yii::$app->user->identity->role == 'user'):?>
                                <a class="btn btn-outline-primary m-1 add-to-cart" data-id="<?= $projecttypee->id?>" data-toggle="modal" data-target="#cart">
                                    <li class="btn btn-outline-primary m-1 active">Заказать данный дизайн</li>
                                </a>                    
                            <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div> 
                <?php endforeach;?>
            </div>
            
            <?php else :?>
            <h2>Здесь пока дизайнов нет.</h2>
            <?php endif;?>

        </div>
    </div>
    <?php Pjax::end()?>
    <!-- Projects End -->