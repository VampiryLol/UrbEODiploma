<?php

/** @var yii\web\View $this */
use yii\bootstrap4\Html;
use yii\helpers\Url;


$this->title = 'Наш сервис';
?>

        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col text-center mb-4">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Почему именно мы?</h6>
                    <h1 class="mb-4">Наш сервис</h1>
                </div>
            </div>  
        </div>

    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 pr-lg-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Наш сервис</h6>
                    <h1 class="mb-4 section-title">Дизайн интерьеров для Вашего дома, офиса.</h1>
                    <p>Ремонт жилого помещения – ответственный и сложный процесс, не лишенный и творческого подхода. К сожалению, большинство компаний стремятся лишь к тому, чтобы отремонтированный дом выглядел аккуратно и более-менее современно. 
                    Те, кто не хочет довольствоваться посредственными вариантами, выбирают ремонт в элитном исполнении. В его основе – 100% соответствие требованиям даже самых взыскательных заказчиков, которые привыкли находиться в самых лучших жизненных обстоятельствах.</p>
                    <a href="<?= Url::to(['site/about'])?>" class="btn btn-primary mt-3 py-2 px-4">Подробнее</a>
                </div>
                <div class="col-lg-6 p-0 pt-5 pt-lg-0">
                    <div class="owl-carousel service-carousel position-relative">
                        <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                            <h3 class="flaticon-bathroom display-3 font-weight-normal text-primary mb-3"></h3>
                            <h5 class="mb-3">Дизайн ванных комнат</h5>
                            <p class="m-0">Ванная комната – одна из основных в доме, разработать ее дизайн практичным, удобным и отвечающим стилю оформления квартиры или дома – задача для нас.</p>
                        </div>
                        <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                            <h3 class="flaticon-kitchen display-3 font-weight-normal text-primary mb-3"></h3>
                            <h5 class="mb-3">Дизайн кухонь</h5>
                            <p class="m-0">Независимо от стиля дизайн кухни в первую очередь должен быть удобным. Планировка предусматривает организацию рабочего места и обеденную зону.</p>
                        </div>
                        <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                            <h3 class="flaticon-bedroom display-3 font-weight-normal text-primary mb-3"></h3>
                            <h5 class="mb-3">Дизайн спален</h5>
                            <p class="m-0">Спальня в квартире и доме должна быть максимально удалена от общественной части интерьера, в частном доме ее располагают на втором этаже или мансарде.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Features Start -->
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mt-5 py-5 pr-lg-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Почему именно мы?</h6>
                    <h1 class="mb-4 section-title">Более 200 реализованных дизайнов интерьера.</h1>
                    <p class="mb-4">Вы получаете на все работы гарантию – 3 года, потому что мы тщательно выбираем материалы, делаем ставку на проверенных производителей и достойное качество. 
                    На Вас работают специалисты с более чем 10 летним опытом успешной реализации проектов в Москве, городах России и Европы.</p>
                    <ul class="list-inline">
                        <li><h5><i class="far fa-check-square text-primary mr-3"></i>Вы точно знаете, что получится в итоге</h5></li>
                        <li><h5><i class="far fa-check-square text-primary mr-3"></i>С 2012 года ни одного обращения по гарантии</h5></li>
                        <li><h5><i class="far fa-check-square text-primary mr-3"></i>60% новых заказчиков приходят по рекомендации</h5></li>
                    </ul>
                    <a href="<?= Url::to(['site/about'])?>" class="btn btn-primary mt-3 py-2 px-4">Подробнее</a>
                </div>
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100 overflow-hidden">
                    <?= Html::img("@web/img/feature.jpg", ['alt' => 'feature'])?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

        <!-- Testimonial Start -->
        <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-7 py-5 pr-md-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3 pt-5">Отзывы</h6>
                    <h1 class="mb-4 section-title">Что говорят о нас наши клиенты</h1>
                    <div class="owl-carousel testimonial-carousel position-relative pb-5 mb-md-5">
                    <?php foreach($reviewsview as $review): ?>
                    
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <div class="ml-3">
                                    <h5><?= $review->name?></h5>
                                    <i><?= $review->pow?></i>
                                </div>
                            </div>
                            <p class="m-0"><?= $review->review?></p>
                        </div>

                    <?php endforeach; ?> 
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100 overflow-hidden">
                    <?= Html::img("@web/img/testimonial.jpg", ['alt' => 'testimonial'])?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->