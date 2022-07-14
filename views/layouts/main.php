<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Html;
use yii\helpers\Url;
use yii\bootstrap4\Modal;
use app\components\MenuWidget;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>

    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/web/img/favicon.jpg" alt="favicon">

</head>

<body>
    <?php $this->beginBody() ?>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">

                        <?php if (!Yii::$app->user->isGuest) : ?>

                            <?php if (Yii::$app->user->identity->role == 'admin') : ?>
                                <h5 class="text-white pr-3">Вы вошли как <?= Yii::$app->user->identity['username'] ?></h5>
                                <span class="text-white">|</span>
                                <a class="text-white px-3" href="<?= Url::to(['/admin']) ?>">Перейти в админ. панель</a>
                                <span class="text-white">|</span>
                            <?php endif; ?>

                            <?php if (Yii::$app->user->identity->role != 'admin') : ?>
                                <h5 class="text-white pr-3">Вы вошли как <?= Yii::$app->user->identity['username'] ?></h5>
                                <span class="text-white">|</span>
                                <a class="text-white px-3" href="<?= Url::to(['/site/faq']) ?>">FAQ</a>
                                <span class="text-white">|</span>
                                <a class="text-white px-3" href="<?= Url::to(['/site/contact']) ?>">Связаться с нами</a>
                                <span class="text-white">|</span>
                            <?php endif; ?>

                            <a class="text-white pl-3" href="<?= Url::to(['/site/logout']) ?>">Выйти</a>

                        <?php else : ?>

                            <a class="text-white pr-3" href="<?= Url::to(['/site/faq']) ?>">FAQ</a>
                            <span class="text-white">|</span>
                            <a class="text-white px-3" href="<?= Url::to(['/site/contact']) ?>">Связаться с нами</a>
                            <span class="text-white">|</span>
                            <a class="text-white pl-3" href="<?= Url::to(['/site/login']) ?>">Войти</a>

                        <?php endif; ?>

                    </div>
                </div>

                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="https://ru-ru.facebook.com/">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="https://twitter.com/?lang=ru">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-white px-3" href="https://ru.linkedin.com/">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-white pl-3" href="https://www.instagram.com/">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container position-relative" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="<?= Url::home() ?>" class="navbar-brand">
                    <h1 class="m-0 display-5 text-white"><span class="text-primary">i</span>DESIGN</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">

                        <a href="<?= Url::to(['site/about']) ?>" class="nav-item nav-link">О нас</a>
                        <a href="<?= Url::to(['category/service']) ?>" class="nav-item nav-link">Наш сервис</a>

                        <div class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Каталог дизайнов</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <?= MenuWidget::widget(['tpl' => 'menu']) ?>
                            </div>
                        </div>
                        
                        <?php if (Yii::$app->user->identity->role == 'user') : ?>
                            <div class="nav-item dropdown">
                                <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Личный кабинет</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="<?= Url::to(['cart/view']) ?>" class="dropdown-item">Корзина</a>
                                    <a href="<?= Url::to(['lk/index']) ?>" class="dropdown-item">Заказы</a>
                                    <a href="<?= Url::to(['order/view']) ?>" class="dropdown-item">Оставить заказ</a>
                                    <a href="<?= Url::to(['review/index']) ?>" class="dropdown-item">Отзывы</a>
                                    <a href="<?= Url::to(['site/review']) ?>" class="dropdown-item">Оставить отзыв</a>
                                    <a href="<?= Url::to(['contact/index']) ?>" class="dropdown-item">Обращения</a>
                                </div>
                            </div>
                        <?php endif; ?>

                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Under Nav Start -->
    <div class="container-fluid bg-white py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-left mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-office font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>Наш офис</h5>
                            <a href="https://goo.gl/maps/K3XSXSrbeKvf3Rx67">
                                <p class="m-0">199155, г. Санкт-Петербург, наб. реки Смоленки, д. 1</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-left text-lg-center mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-email font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>Наша почта</h5>
                            <a href="mailto:iDesign@info.ru">
                                <p class="m-0">iDesign@info.ru</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-left text-lg-right mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-telephone font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>Наш телефон</h5>
                            <a href="tel:+7 921 123 45 67">
                                <p class="m-0">+7 921 123 45 67</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Under Nav End -->
    <div class="container table-responsive">
        <?= Alert::widget() ?>
    </div>

    <?= $content; ?>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Связаться с нами</h4>

                <p><i class="fa fa-map-marker-alt mr-2"></i>
                    <a href="https://goo.gl/maps/K3XSXSrbeKvf3Rx67">
                        199155, г. Санкт-Петербург, наб. реки Смоленки, д. 1
                    </a>
                </p>

                <p><i class="fa fa-phone-alt mr-2"></i>
                    <a href="tel:+7 921 123 45 67">
                        +7 921 123 45 67
                    </a>
                </p>

                <p><i class="fa fa-envelope mr-2"></i>
                    <a href="mailto:iDesign@info.ru">
                        iDesign@info.ru
                    </a>
                </p>

                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="https://twitter.com/?lang=ru"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="https://ru-ru.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="https://ru.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Быстрые ссылки</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="<?= Url::home() ?>"><i class="fa fa-angle-right mr-2"></i>На главную</a>
                    <a class="text-white mb-2" href="<?= Url::to(['/site/about']) ?>"><i class="fa fa-angle-right mr-2"></i>О нас</a>
                    <a class="text-white mb-2" href="<?= Url::to(['/category/service']) ?>"><i class="fa fa-angle-right mr-2"></i>Наш сервис</a>
                    <?php if (Yii::$app->user->identity->role == 'user') : ?>
                        <a class="text-white mb-2" href="<?= Url::to(['/lk/index']) ?>"><i class="fa fa-angle-right mr-2"></i>Личный кабинет</a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Поддержка</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="<?= Url::to(['/site/faq']) ?>"><i class="fa fa-angle-right mr-2"></i>FAQ</a>
                    <a class="text-white mb-2" href="<?= Url::to(['/site/contact']) ?>"><i class="fa fa-angle-right mr-2"></i>Связаться с нами</a>
                </div>
            </div>
            <?php if (Yii::$app->user->identity->role != 'admin') :  ?>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Подписаться на новости сайта</h4>
                <div id="news-form">
                    <div class="form-group">
                        <input type="text" class="form-control border-0 subscribe" placeholder="Ваше имя" required="required" />
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control border-0 subscribe" placeholder="Электронная почта" required="required" />
                    </div>
                    <div>
                        <button class="btn btn-lg btn-primary btn-block border-0" type="submit" onclick="news()">Подписаться</button>
                    </div>
                </div>
            </div>
            <?php endif ; ?>
        </div>
        <div class="container border-top border-secondary pt-5">
            <p class="m-0 text-center text-white">
                &copy; <a class="text-white font-weight-bold" href="<?= Url::home() ?>">iDesign</a> 2022. Все права защищены.
            </p>
        </div>
    </div>

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <?php Modal::begin([
        'title' => '<h2>Состав корзины</h2>',
        'id' => 'cart',
        'size' => 'modal-lg',
        'footer' => '<h6>*Окончательная цена будет сформирована после оформления заказа и диалога с нашими дизайнерами.</h6>
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Продолжить просмотр</button>
                 <button type="button" class="btn btn-secondary clear-cart">Очистить корзину</button>
                 <a href="' . Url::to(['/cart/view']) . '"><button type="button" class="btn btn-primary">Оформить заказ</button></a>'
    ]);


    Modal::end(); ?>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>