<?php

/** @var yii\web\View $this */
use yii\bootstrap4\Html;
use yii\helpers\Url;

$this->title = 'О нас';
?>

        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col text-center mb-4">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Почему именно мы?</h6>
                    <h1 class="mb-4">О нас</h1>
                </div>
            </div>  
        </div>

    <!-- About Start -->
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-primary h-100 py-5 px-3">
                        <i class="flaticon-brickwall display-1 font-weight-normal text-secondary mb-3"></i>
                        <h4 class="display-3 mb-3">Более 25</h4>
                        <h1 class="m-0">Лет работы</h1>
                    </div>
                </div>
                <div class="col-lg-7 m-0 my-lg-5 pt-5 pb-5 pb-lg-2 pl-lg-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Кто мы такие?</h6>
                    <h1 class="mb-4 section-title">Весь комплекс строительных услуг в одной компании</h1>
                    <p>8 из 10 человек предпочитают заказывать дизайн интерьера в студии, выполняющей полный комплекс работ:</p>
                    <div class="row py-2">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-house font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Ремонтно-отделочные работы</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-stairs font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Проект дизайна интерьера</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-office font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Согласование проекта</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-living-room font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Обустройство и комплектация</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Features Start -->
    <div class="container-fluid py-5">
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

    <!-- Team Start -->
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="py-5 px-4 h-100 bg-primary d-flex flex-column align-items-center justify-content-center">
                        <h6 class="text-white font-weight-normal text-uppercase mb-3">Наша команда</h6>
                        <h1 class="mb-0 text-center">Специалисты с опытом работы более 5 лет</h1>
                    </div>
                </div>
                <div class="col-md-8 col-sm-6 p-0 py-sm-5">
                    <div class="owl-carousel team-carousel position-relative p-0 py-sm-5">
                        <div class="team d-flex flex-column text-center mx-3">
                            <div class="position-relative">
                            <?= Html::img("@web/img/team-1.jpg", ['alt' => 'feature'], ['class' => 'img-fluid w-100'])?>
                            </div>
                            <div class="d-flex flex-column bg-secondary text-center py-3">
                                <h5 class="text-white">ПЕТДЖА КАНТАНИИН</h5>
                                <p class="m-0">Команда iDesign</p>
                            </div>
                        </div>
                        <div class="team d-flex flex-column text-center mx-3">
                            <div class="position-relative">
                            <?= Html::img("@web/img/team-2.jpg", ['alt' => 'feature'], ['class' => 'img-fluid w-100'])?>
                            </div>
                            <div class="d-flex flex-column bg-secondary text-center py-3">
                                <h5 class="text-white">ЕОНДЖАН КИМ</h5>
                                <p class="m-0">Команда iDesign</p>
                            </div>
                        </div>
                        <div class="team d-flex flex-column text-center mx-3">
                            <div class="position-relative">
                            <?= Html::img("@web/img/team-3.jpg", ['alt' => 'feature'], ['class' => 'img-fluid w-100'])?>
                            </div>
                            <div class="d-flex flex-column bg-secondary text-center py-3">
                                <h5 class="text-white">НИКОЛАС СМИДТ</h5>
                                <p class="m-0">Команда iDesign</p>
                            </div>
                        </div>
                        <div class="team d-flex flex-column text-center mx-3">
                            <div class="position-relative">
                            <?= Html::img("@web/img/team-4.jpg", ['alt' => 'feature'], ['class' => 'img-fluid w-100'])?>
                            </div>
                            <div class="d-flex flex-column bg-secondary text-center py-3">
                                <h5 class="text-white">ЕУСЕОК ЛИ</h5>
                                <p class="m-0">Команда iDesign</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->