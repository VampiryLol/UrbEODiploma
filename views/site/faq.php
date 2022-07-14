<?php

/** @var yii\web\View $this */
use yii\bootstrap4\Html;

$this->title = 'Часто задаваемые вопросы';
?>

<div class="container">

        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col text-center mb-4">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Ваши вопросы по дизайну интерьера</h6>
                    <h1 class="mb-4">Часто задаваемые вопросы</h1>
                </div>
            </div>  
        </div>

    <div id="accordion">

        <div class="card">
            <div class="card-header" id="headingOne">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                <h4 class="text-primary font-weight-normal mb-0">
                1: Сколько стоит дизайн-проект?
                </h4>
            </button>   
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                Стандартное выполнение дизайн-проекта в нашей компании стоит 700-4500 руб. за 1 кв. м.
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingTwo">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <h4 class="text-primary font-weight-normal mb-0">
                2: Сроки выполнения дизайн-проекта интерьера квартиры, офиса или коттеджа?
                </h4>
            </button>   
            </div>

            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">1,5 месяца.</div>
                <div class="card-body"><?= Html::img("@web/assets/bi/check2-circle.svg", ['alt' => 'faq'])?> 1 этап – 10 рабочих дней;</div>
                <div class="card-body"><?= Html::img("@web/assets/bi/check2-circle.svg", ['alt' => 'faq'])?> 2 этап – 30 рабочих дней.</div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingThree">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <h4 class="text-primary font-weight-normal mb-0">
                3: Что входит в состав дизайн-проекта?
                </h4>
            </button>   
            </div>

            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">В любой дизайн-проект входят:</div>
                <div class="card-body"><?= Html::img("@web/assets/bi/check2-circle.svg", ['alt' => 'faq'])?> Планировочные решения и эскизы будущего интерьера;</div>
                <div class="card-body"><?= Html::img("@web/assets/bi/check2-circle.svg", ['alt' => 'faq'])?> Рабочие чертежи и документации, необходимые строителям.</div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingFour">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                <h4 class="text-primary font-weight-normal mb-0">
                4: Если мне не нравится ваша перепланировка или дизайн?
                </h4>
            </button>   
            </div>

            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                <div class="card-body">
                Наши дизайнеры работают с заказчиком максимально плотно, потому вы можете вносить свои коррективы и уточнения еще на этапе создание дизайн-проекта. Более того, изменения можно вносить даже после начала ремонта, если они не очень масштабные: вроде смены типа обоев.
                </div>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header" id="headingFive">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                <h4 class="text-primary font-weight-normal mb-0">
                5: Дизайн-проект готов. Но как выбрать отделку и мебель?
                </h4>
            </button>   
            </div>

            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                <div class="card-body">
                Этим занимается либо дизайнер, создавший для вас интерьер, или декоратор. Вместе с вами (или сами, если вы доверяете их вкусу), они выберут всю отделку и модели мебели.
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingSix">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                <h4 class="text-primary font-weight-normal mb-0">
                6: Возможна ли разработка дизайн-проекта только для 1-ой комнаты в квартире?
                </h4>
            </button>   
            </div>

            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                <div class="card-body">
                Дизайн-проект да, но от 100 квадратных метров. И ремонт наша фирма реализует только на целом объекте.
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingSeven">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                <h4 class="text-primary font-weight-normal mb-0">
                7: Если ограничены средства, можно ли согласовать рамки, для которых вы будете создавать проект?
                </h4>
            </button>   
            </div>

            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                <div class="card-body">
                Конечно, вы можете сразу обозначить ту стоимость, в которую хотите уместить и проект интерьера, и ремонт и исходя из нее мы и будем работать.
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingEight">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                <h4 class="text-primary font-weight-normal mb-0">
                8: Есть ли гарантии на производимые ремонтные работы, выполненные по вашим дизайн-проектам?
                </h4>
            </button>   
            </div>

            <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                <div class="card-body">
                На все выполненные ремонтно-строительные работы мы даем гарантию от 1 до 3 лет. Наши работы застрахованы от ущерба третьим лицам.
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingNine">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                <h4 class="text-primary font-weight-normal mb-0">
                9: Составляется ли смета на материалы?
                </h4>
            </button>   
            </div>

            <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
                <div class="card-body">
                Да, мы составляем смету на черновые материалы (это те материалы, которые после выполнения всего комплекса работ Вы не будете видеть – шпатлевки, грунтовки, трубы, провода, гипсокартон и т.д., но именно от этих материалов в большей степени зависит качество выполнения работ).
                Эту смету, мы составляем после того, как смета на работы обсуждена Вами со специалистами нашей компании и приведена в состояние, которое Вас устраивает.
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingTen">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                <h4 class="text-primary font-weight-normal mb-0">
                10: Кто контролирует выполнение ремонтных работ?
                </h4>
            </button>   
            </div>

            <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion">
                <div class="card-body">К каждому объекту прикреплен менеджер проекта. Он отвечает за:</div><br>
                <div class="card-body"><?= Html::img("@web/assets/bi/check2-circle.svg", ['alt' => 'faq'])?> Правильную организацию и качество выполнения работ;</div>
                <div class="card-body"><?= Html::img("@web/assets/bi/check2-circle.svg", ['alt' => 'faq'])?> Исполнение сроков, указанных в договоре;</div>
                <div class="card-body"><?= Html::img("@web/assets/bi/check2-circle.svg", ['alt' => 'faq'])?> Связь с субподрядными организациями и контроль их работы;</div>
                <div class="card-body"><?= Html::img("@web/assets/bi/check2-circle.svg", ['alt' => 'faq'])?> Предоставление отчетов клиенту как по выполненным работам, так и по деньгам, затраченным на материалы.</div>
            </div>
        </div>
    </div>

</div>