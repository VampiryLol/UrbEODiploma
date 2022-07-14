<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use yii\bootstrap4\Html;
use yii\helpers\Url;
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
    <title>Админ | <?= Html::encode($this->title) ?></title>
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
                        <h5 class="text-white pr-3">Вы вошли как <?= Yii::$app->user->identity['username'] ?></h5>
                        <span class="text-white">|</span>
                        <a class="text-white pl-3" href="<?= Url::to(['/site/logout'])?>">Выйти</a>
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
                <a href="<?= Url::home()?>" class="navbar-brand">
                    <h1 class="m-0 display-5 text-white"><span class="text-primary">i</span>DESIGN</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">

                        <div class="nav-item dropdown">
                        <a href=" " class="nav-link dropdown-toggle" data-toggle="dropdown">Заказы</a>
                            <div class="dropdown-menu rounded-0 m-0">
                            <a href="<?= Url::to(['order/index'])?>" class="dropdown-item">Показать заказы</a>
                            </div>
                        </div>

                        <div class="nav-item dropdown">
                        <a href=" " class="nav-link dropdown-toggle" data-toggle="dropdown">Обращения</a>
                            <div class="dropdown-menu rounded-0 m-0">
                            <a href="<?= Url::to(['contact/index'])?>" class="dropdown-item">Показать обращения</a>
                            </div>
                        </div>

                        <div class="nav-item dropdown">
                        <a href=" " class="nav-link dropdown-toggle" data-toggle="dropdown">Отзывы</a>
                            <div class="dropdown-menu rounded-0 m-0">
                            <a href="<?= Url::to(['review/index'])?>" class="dropdown-item">Показать отзывы</a>
                            </div>
                        </div>

                        <div class="nav-item dropdown">
                        <a href=" " class="nav-link dropdown-toggle" data-toggle="dropdown">Дизайны</a>
                            <div class="dropdown-menu rounded-0 m-0">
                            <a href="<?= Url::to(['project/index'])?>" class="dropdown-item">Показать дизайны</a>
                            <a href="<?= Url::to(['project/create'])?>" class="dropdown-item">Добавить дизайн</a>
                            </div>
                        </div>

                        <div class="nav-item dropdown">
                        <a href=" " class="nav-link dropdown-toggle" data-toggle="dropdown">Категории</a>
                            <div class="dropdown-menu rounded-0 m-0">
                            <a href="<?= Url::to(['category/index'])?>" class="dropdown-item">Показать категории</a>
                            <a href="<?= Url::to(['category/create'])?>" class="dropdown-item">Добавить категорию</a>
                            <?= MenuWidget::widget(['tpl' => 'menu'])?>
                            </div>
                        </div>

                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

<div class="container">

        <?php if( Yii::$app->session->hasFlash('success') ): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?php echo Yii::$app->session->getFlash('success'); ?>
            </div>
        <?php endif; ?>

    <?= $content; ?>
</div>


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
        <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Быстрые ссылки</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="<?= Url::home()?>"><i class="fa fa-angle-right mr-2"></i>На главную</a>
                    <a class="text-white mb-2" href="<?= Url::to(['/site/about'])?>"><i class="fa fa-angle-right mr-2"></i>О нас</a>
                    <a class="text-white mb-2" href="<?= Url::to(['/site/service'])?>"><i class="fa fa-angle-right mr-2"></i>Наш сервис</a>
                </div>
            </div>
        </div>
        <div class="container border-top border-secondary pt-5">
            <p class="m-0 text-center text-white">
                &copy; <a class="text-white font-weight-bold" href="<?= Url::home()?>">iDesign</a>. 2022. Все права защищены.
            </p>
        </div>
    </div>
    <!-- Footer End -->


<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>